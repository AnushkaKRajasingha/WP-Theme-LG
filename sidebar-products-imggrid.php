<h3>Products &amp; Markets</h3>

<div class="row">
	<div class="col-md-12">
		<div class="flex-container-grid">
          
         <?php
									global $page_tags, $exclude_posts;
									if ($page_tags) {
										$tag_ids = array ();$tag_slugs = array ();
										foreach ( $page_tags as $_tag ) {
											$tag_ids [] = $_tag->term_id;
											$tag_slugs[] = $_tag->slug;
										}										
										$page_tags = null;
										foreach ( $exclude_posts as $_expost ) {
											$exclude_posts_ids [] = $_expost;
										}
										// var_dump($exclude_posts_ids);
										$args = array (
												'post_type' => 'markets-subcontent',
												'tax_query' => array (
														'relation' => 'OR',
														array (
																'taxonomy' => 'about-me',
																'field' => 'slug',
																'terms' => $tag_slugs 
														),
														array (
																'taxonomy' => 'my-likes',
																'field' => 'slug',
																'terms' => $tag_slugs 
														) 
												) 
										);
										$mytaxquery = new WP_Query ( $args );										
										while ( $mytaxquery->have_posts () ) :											
											$mytaxquery->the_post ();
											if (! in_array ( $mytaxquery->post->ID, $exclude_posts_ids )) {
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