<?php
/*
  Template Name:  Sub-Markets
*/
?>
<?php get_header(); ?>

     <div class="row">


        

        <div class="col-md-10">
          
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

        <!--NOW IT"S TIME TO GRAB A SIDEBAR-->
        <?php get_sidebar('sub-markets'); ?>


     </div>

     <?php get_sidebar('products-imggrid'); ?>

      
<?php get_footer(); ?>