<?php
/*
  Template Name:  NewsPage
*/
?>

<!--<?php echo the_slug(); ?> WILL DISPLAY PAGE SLUG-->

<?php get_header(); ?>

     <div class="row">


        <!--MENU SIDEBAR-->
        <?php get_sidebar('news-nav'); ?>

        <div class="col-md-6">
          
             <?php if( is_page('promotions') ) : ?>

                
               
                <?php

                  $args = array(
                    'post_type'     => 'news',
                    'category_name' => 'promotion',
                    'post_status'   => 'publish',
                    'post_per_page' => '6',
                    'order'         => 'DESC',
                    'orderby'       => 'date'
                    
                    );

                   $query = new WP_Query ( $args );
              ?>

                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                  

                    <div class="news-flex">
                      <div class="pdf-img"><?php the_post_thumbnail( 'medium' ); ?></div>
                        <div class="brief-text">
                            <h2><?php the_title(); ?></h2>
                                  
                            <p><?php the_content(); ?><a href="<?php echo $file['url']; ?>" target="_blank">Read More</a></p>

                                  
                        </div>  
                      </div>

                <?php endwhile; endif; wp_reset_postdata(); ?>
              
              <?php endif; ?>

        </div>

        

        <?php if( is_page('lgnews') ) : ?>
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

     </div>

     
      
<?php get_footer(); ?>