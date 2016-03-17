<?php
/*
  Template Name:  Markets-catLabelandFilm
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

              <?php the_content(); ?>

               

            <?php endwhile; endif; ?>


            <!--Used to display Posts that match the category DryPeel-->
        
          <?php

            $args = array(
              'post_type' => 'markets-subcontent',
              'category_name' => 'label-film'
              );

            $query = new WP_Query ( $args );
          ?>
        

            <div class="like-content-posts">

              <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <?php  do_action('collect_related_args_v2',$query->post->ID,array('about-me','my-likes')); ?>

                <div class="like-posts">
                  <h4><?php the_title(); ?></h4>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                </div>

              <?php endwhile; endif; wp_reset_postdata(); ?>

            </div>



        </div>

        
        
<!--NOW IT"S TIME TO GRAB A SIDEBAR-->
        <?php get_sidebar('products-rt'); ?>

     </div>


<?php do_action('display_related','Markets Related','markets-subcontent',array('about-me','my-likes'));?>

      
<?php get_footer(); ?>