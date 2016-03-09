<?php
/*
  Template Name:  Markets-cathealth
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
              'category_name' => 'cathealth',
              'posts_per_page' => 10
              );

            $query = new WP_Query ( $args );
            global $page_tags,$exclude_posts ; 
            $page_tags = array(); $exclude_posts = array();
          ?>
        

            <div class="like-content-posts">

              <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();  
              $t = wp_get_object_terms($query->post->ID,  'about-me' );
              $page_tags = array_merge($page_tags,$t);
              $t = wp_get_object_terms($query->post->ID,  'my-likes' );
              $page_tags = array_merge($page_tags,$t);
              $exclude_posts[] = $query->post->ID;
              ?>

                <div class="like-posts">
                  <h4><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                  
                </div>

              <?php endwhile; endif; wp_reset_postdata(); ?>

            </div>



        </div>

        
        
<!--NOW IT"S TIME TO GRAB A SIDEBAR-->
        <?php get_sidebar('products-rt'); ?>

     </div>


     <?php get_sidebar('products-imggrid'); ?>

      
<?php get_footer(); ?>