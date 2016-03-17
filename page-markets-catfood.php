<?php
/*
  Template Name:  Markets-catfood
*/
?>

<?php get_header(); ?>

     <div class="row">


        <!--MENU SIDEBAR-->
        <?php get_sidebar('markets-nav'); ?>

        <div class="col-md-6 static-page-content">
          
            <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

              <div class="page-header">
                <h1><?php the_title(); ?></h1>
              </div>

              <!--<?php the_content(); ?>-->

               

            <?php endwhile; endif; ?>


            <!--Used to display Posts that match the category DryPeel-->
        
          <?php

            $args = array(
              'post_type' => 'markets-subcontent',
              'category_name' => 'catfood',
              'posts_per_page' => 10
              );

            $query = new WP_Query ( $args );
            do_action('collect_related_args',$query,array('about-me','my-likes')); 
            ?>
        </div>

        
        
<!--NOW IT"S TIME TO GRAB A SIDEBAR-->
        <?php get_sidebar('products-rt'); ?>

     </div>     
	<?php do_action('display_related','Markets Related','markets-subcontent',array('about-me','my-likes'));?>      
<?php get_footer(); ?>