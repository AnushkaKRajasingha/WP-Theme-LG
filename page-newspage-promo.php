<?php
/*
  Template Name:  NewsPromo
*/
?>

<!--<?php echo the_slug(); ?> WILL DISPLAY PAGE SLUG-->

<?php get_header(); ?>

     <div class="row">


        <!--MENU SIDEBAR-->
        <?php get_sidebar('news-nav'); ?>

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

     </div>

     
      
<?php get_footer(); ?>