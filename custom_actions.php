<?php
/* Collect Args */
add_action('collect_related_args', 'func_collect_related_args',10,2);
function func_collect_related_args($query,$cats){
	global $page_tags,$exclude_posts ;
	$page_tags = array(); $exclude_posts = array();
	?>
	<div class="like-content-posts">	
	<?php 
	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
	
	foreach ($cats as $cat) {
		$t = wp_get_object_terms($query->post->ID,  $cat );
		$page_tags = array_merge($page_tags,$t);
	}	
	$exclude_posts[] = $query->post->ID;
	?>
		<div class="like-posts">
	    <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
	    <?php the_content(); ?>
	    </div>
	    	<?php endwhile; endif; wp_reset_postdata(); ?>
	</div><?php 
}

add_action('collect_related_args_v1', 'func_collect_related_args_v1',10,2);
function func_collect_related_args_v1($cats){
	global $page_tags,$exclude_posts ;
	$page_tags = array(); $exclude_posts = array();
	?>
	
	 <div class="row">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
          
          foreach ($cats as $cat) {
          	$postid = get_the_ID();
          	$t = wp_get_object_terms ($postid ,$cat);//var_dump(array('t',$t),'cat',$cat,'postid',$postid);
          	$page_tags = array_merge($page_tags,$t);
          }
          $exclude_posts[] = get_the_ID();
          
          ?>
            <!--Primary Column-->
              <div class="col-md-4">

                <?php the_post_thumbnail( 'small', array('class'=>'img-resp') ); ?>

              </div>

            <!--Secondary Column-->
              <div class="col-md-8">

                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

              </div>
          
          <?php endwhile; endif;  ?>

        </div>
        <?php //var_dump(array($page_tags,$exclude_posts));
}
add_action('collect_related_args_v2', 'func_collect_related_args_v2',10,2);
function func_collect_related_args_v2($post_ID,$cats){
	global $page_tags,$exclude_posts ;
	if(!isset($page_tags))
		$page_tags = array(); 
	if(!isset($exclude_posts))
		$exclude_posts = array();
	foreach ($cats as $cat) {
		$t = wp_get_object_terms($post_ID,  $cat );
		$page_tags = array_merge($page_tags,$t);
	}
	$exclude_posts[] = $post_ID;
	//var_dump($page_tags);
}

/* Collect Args - Ends */
/* Display Related Products */
add_action( 'display_related', 'func_display_related', 10, 3 );

function func_display_related($title,$post_type,$cats){
?> 
<h3><?php echo $title; ?></h3>
<div class="row">
        <div class="col-md-12">
		<div class="flex-container-grid">
         <?php
									global $page_tags, $exclude_posts;  //var_dump($page_tags);
									if ($page_tags) {
										$tag_ids = array ();$tag_slugs = array ();
										foreach ( $page_tags as $_tag ) {
											$tag_ids [] = $_tag->term_id;
											$tag_slugs[] = $_tag->slug;
										}	
										/*var_dump($tag_slugs);
										echo '<hr/>';
										var_dump($exclude_posts);*/
										$args = array (
												'post_type' => $post_type,
												'tax_query' => array (
														'relation' => 'OR'
												)
										);
										foreach ($cats as $cat) {
											$args['tax_query'][] = array (
													'taxonomy' => $cat,
													'field' => 'slug',
													'terms' => $tag_slugs
											);
										}
										
										$page_tags = null;
										foreach ( $exclude_posts as $_expost ) {
											$exclude_posts_ids [] = $_expost;
										}
										
										
			$mytaxquery = new WP_Query( $args ); //var_dump($mytaxquery);
			
			while( $mytaxquery->have_posts() ) :
			
			$mytaxquery->the_post(); 
			if(!in_array($mytaxquery->post->ID,$exclude_posts_ids)){
			?>

									<div class="flex-grid-child">
											<a href="<?php echo the_permalink(); ?>"
												title="View <?php the_title(); ?>" class="grid-img">
												<div class="fig">
												<?php the_post_thumbnail(array(150,150)); ?>
												</div>
												<!--/.fig-->
												<h4><?php the_title(); ?></h4>
											</a>
										</div>
										<!--/flex-grid-child -->

									<?php } endwhile ; wp_reset_query (); 
									} else {
										echo 'No related item found.';
									}
									?>
          </div>
          </div>
     </div>
	
	<?php $page_tags = array(); $exclude_posts = array();
}
/* Display Related Products - Ends */

/* Display Featured */
add_action( 'display_featured', 'func_display_featured', 10,2 );

function func_display_featured($title,$cat){
	?>
<h3><?php echo $title; ?></h3>
<div class="row">
        <div class="col-md-12">
		<div class="flex-container-grid">
         <?php
			$args = array(
					'post_type' => 'any',
              		'category_name' => $cat,
              		'posts_per_page' =>  10,
              );
										
										
			$mytaxquery = new WP_Query( $args );// var_dump($args);
			
			while( $mytaxquery->have_posts() ) :
			
			$mytaxquery->the_post(); 
			//if(!in_array($mytaxquery->post->ID,$exclude_posts_ids)){
			?>

									<div class="flex-grid-child">
											<a href="<?php echo the_permalink(); ?>"
												title="View <?php the_title(); ?>" class="grid-img">
												<div class="fig">
												<?php the_post_thumbnail(array(150,150)); ?>
												</div>
												<!--/.fig-->
												<h4><?php the_title(); ?></h4>
											</a>
										</div>
										<!--/flex-grid-child -->

									<?php 
			//} 
			endwhile ; wp_reset_query (); 
									/*} else {
										echo 'No related item found.';
									}*/
									?>
          </div>
          </div>
     </div>
	
	<?php //$page_tags = array(); $exclude_posts = array();
}
/* Display Related Products - Ends */
