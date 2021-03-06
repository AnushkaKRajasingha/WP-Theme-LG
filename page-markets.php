<?php
/*
  Template Name:  Markets
*/
?>
<?php get_header(); ?>

     <div class="row">


        <!--MENU SIDEBAR-->
        <?php get_sidebar('markets-nav'); ?>

        <div class="col-md-6">
          
            <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
<?php  do_action('collect_related_args_v2',get_the_ID(),array('about-me','my-likes')); ?>
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

        <!--NOW IT"S TIME TO GRAB A SIDEBAR-->
        <?php get_sidebar('products-rt'); ?>


     </div>
<?php do_action('display_related','Markets Related','markets-subcontent',array('about-me','my-likes'));?>

      
<?php get_footer(); ?>