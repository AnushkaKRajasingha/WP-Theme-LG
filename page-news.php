<?php
/*
  Template Name:  News
*/
?>

<!--<?php echo the_slug(); ?> WILL DISPLAY PAGE SLUG-->

<?php get_header(); ?>

     <div class="row">


        <!--MENU SIDEBAR-->
        <?php get_sidebar('news-nav'); ?>

          <?php if( is_page('news') ) : ?>
            <!--Regular News Page Layout------------------------------------------------------------------------------------------------------------------------>
              <div class="col-md-6">
                
                  <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

                    <div class="page-header">
                      <h1><?php the_title(); ?></h1>
                    </div>

                    <?php the_content(); ?>


                  <?php endwhile; else: ?>

                    <div class="page-header">
                      <h1>Hold Up.....Wait</h1>
                    </div>

                    <p>There is no content</p>

                  <?php endif; ?>

              </div>

          <!--END & NEW SECTION------------------------------------------------------------------------------------------------------------------------>

          <?php elseif( is_page('tools') ) : ?>
            <!--TOOLS CONTENT-->
            <div class="col-md-6">
              tools page
            </div>


          <!--END & NEW SECTION------------------------------------------------------------------------------------------------------------------------>

          <?php elseif( is_page('press-releases') ) : ?>
            <!--PRESS RELEASES-->
            <div class="col-md-6">
              
              <?php

                    $args = array(
                      'post_type'     => 'news',
                      'category_name' => 'press-release',
                      'post_status'   => 'publish',
                      'posts_per_page' => 3,
                      'order'         => 'ASC',
                      'orderby'       => 'date',

                      
                      );

                     $query = new WP_Query ( $args );

                     
                     
                ?>

                  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                   <?php  do_action('collect_related_args_v2',$query->post->ID,array('category','post_tag')); ?> 

                      <div class="press-release">
                        
                      <h3><?php the_title(); ?></h3>

                      <p><? the_content( ); ?></p>

                        <?php 

                          $file = get_field('pdf_upload');

                          if( $file ): ?>

                          <a href="<?php echo $file['url']; ?>" target="_blank">Read More</a>

                        <?php endif; ?>                                          
                           
                        </div>

                  <?php endwhile; endif; wp_reset_postdata(); ?>



                  <h2>Archived Press Releases</h2>
                  <hr>


                  <!--ARCHIVE DOCUMENT LINK-->

                  <?php

                    $args = array(
                      'post_type'     => 'news',
                      'category_name' => 'press-release',
                      'post_status'   => 'publish',
                      'post_per_page' => '0',
                      'order'         => 'ASC',
                      'orderby'       => 'date'
                      
                      );

                     $query = new WP_Query ( $args );

                     

                ?>

                

                  <div class="">
                    
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                    <ul>

                    <?php 

                          $file = get_field('pdf_upload');

                          if( $file ): ?>

                    <li><a href="<?php echo $file['url']; ?>" target="_blank"><?php the_field( 'long_title' )?></a></li>

                    <?php endif; ?>

                      <ul><li>Publish Date : <?php the_field( 'pub_date' )?></li></ul>

                    

                    </ul>

                    <?php endwhile; endif; wp_reset_postdata(); ?>


                  </div>



            </div>


          <!--END & NEW SECTION------------------------------------------------------------------------------------------------------------------------>

          <?php elseif( is_page('media-kit') ) : ?>
            <!--MEDIA KIT-->
            <div class="col-md-6">
              media kit
            </div>

          <!--END & NEW SECTION------------------------------------------------------------------------------------------------------------------------>

          <?php elseif( is_page('promotions') ) : ?>
            <!--PROMOTIONS(EBLASTS)-->
              <div class="col-md-6">
                <?php

                    $args = array(
                      'post_type'     => 'news',
                      'category_name' => 'promotion',
                      'post_status'   => 'publish',
                      'post_per_page' => '2',
                      'order'         => 'ASC',
                      'orderby'       => 'date',

                      
                      );

                     $query = new WP_Query ( $args );

                     
                     
                ?>

                  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php  do_action('collect_related_args_v2',$query->post->ID,array('category','post_tag')); ?>
                    

                      <div class="promo-flex">
                        <div class="pdf-img">

                        <?php 

                          $file = get_field('pdf_upload');

                          if( $file ): ?>

                          <a href="<?php echo $file['url']; ?>" target="_blank"><?php the_post_thumbnail( 'medium' ); ?></a>

                        <?php endif; ?>

                        </div>
                                    
                          <div class="brief-text">
                              <h2><?php the_title(); ?></h2>
                                    
                              <p><?php the_content(); ?></p>

                                    
                          </div>  
                        </div>

                  <?php endwhile; endif; wp_reset_postdata(); ?>


                  <hr>


                  <!--ARCHIVE DOCUMENT LINK-->

                  <?php

                    $args = array(
                      'post_type'     => 'news',
                      'category_name' => 'promotion',
                      'post_status'   => 'publish',
                      'post_per_page' => '0',
                      'order'         => 'ASC',
                      'orderby'       => 'date'
                      
                      );

                     $query = new WP_Query ( $args );

                     

                ?>

                

                  <div class="">
                    
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                    <ul>

                    <?php 

                          $file = get_field('pdf_upload');

                          if( $file ): ?>

                    <li><a href="<?php echo $file['url']; ?>" target="_blank"><?php the_field( 'long_title' )?></a></li>

                    <?php endif; ?>

                      <ul><li>Publish Date : <?php the_field( 'pub_date' )?></li></ul>

                    

                    </ul>

                    <?php endwhile; endif; wp_reset_postdata(); ?>


                  </div>

                  
              </div>

            

          <!--END & NEW SECTION------------------------------------------------------------------------------------------------------------------------>

          <?php elseif( is_page('brochures') ) : ?>
            <!--BROCHURES-->
            <div class="col-md-6">
              
              <?php

                  $args = array(
                    'post_type'     => 'news',
                    'category_name' => 'brochure',
                    'post_status'   => 'publish',
                    'post_per_page' => '3',
                    'order'         => 'DESC',
                    'orderby'       => 'date'
                    
                    );

                   $query = new WP_Query ( $args );
              ?>

              

              <div class="news-flex">
                     
                      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                      <?php  do_action('collect_related_args_v2',$query->post->ID,array('category','post_tag')); ?>
                          <div>
                            <div class="doc-header">
                              <?php the_title(); ?>
                            </div>
                            <div>
                              <?php the_post_thumbnail( 'pdf-image', array('class'=>'img-resp') ); ?>               
                            </div>
                          </div>                           
                      <?php endwhile; endif; wp_reset_postdata(); ?>
              </div>  
            

                

                <hr>


                <!--ARCHIVE DOCUMENT LINK-->

                <?php

                  $args = array(
                    'post_type'     => 'news',
                    'category_name' => 'brochure',
                    'post_status'   => 'publish',
                    'post_per_page' => '0',
                    'order'         => 'DESC',
                    'orderby'       => 'date'
                    
                    );

                   $query = new WP_Query ( $args );

                   

              ?>

              

                <div class="">
                  
                  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                  <ul>

                  <li><a href=""><?php the_field( 'long_title' )?></a></li>
                    <ul><li>Publish Date : <?php the_field( 'pub_date' )?></li></ul>

                  </ul>

                  <?php endwhile; endif; wp_reset_postdata(); ?>


                </div>

                
            </div>

          <!--END & NEW SECTION------------------------------------------------------------------------------------------------------------------------>

          <?php elseif( is_page('product-sheets') ) : ?>
            <!--PRODUCT SHEETS-->
            <div class="col-md-6">
              product sheets
            </div>

          <!--END & FINAL SECTION------------------------------------------------------------------------------------------------------------------------>

        <?php else : ?>
          <?php the_content(); ?>
        <?php endif; ?>
 		
        <!--CALLS FOR SIDEBARS-->


        <?php if( is_page('news') ) : ?>
          <?php get_sidebar('news-tertiary'); ?>

        <?php elseif( is_page('tools') ) : ?>
          <?php get_sidebar('news-apg'); ?>

        <?php elseif( is_page('press-releases') ) : ?>
          <?php get_sidebar('news-press'); ?>

        <?php elseif( is_page('media-kit') ) : ?>
          <?php get_sidebar('news-media-kit'); ?>

        <?php elseif( is_page('promotions') ) : ?>
          <?php get_sidebar('news-promotions'); ?>

        <?php elseif( is_page('brochures') ) : ?>
          <?php get_sidebar('news-brochure'); ?>

        <?php elseif( is_page('product-sheets') ) : ?>
          <?php get_sidebar('news-ps'); ?>

        <?php else : ?>
          <?php get_sidebar(); ?>
        <?php endif; ?>
		<div class="col-md-12"><?php do_action('display_related','LG News Related','news',array('category','post_tag'));?></div>	
     </div>

     
      
<?php get_footer(); ?>