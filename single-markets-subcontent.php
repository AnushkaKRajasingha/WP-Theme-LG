<?php 
/**
*TEMPLATE FOR DISPLAYING SINGLE PAGE POSTS FOR SUB-MARKETS
*
*/
 get_header(); ?>



  
    <div class="row sub-markets-home">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!--Primary Column-->
          <div class="col-md-4">

            <?php the_post_thumbnail( 'large' ); ?>

          </div>

        <!--Secondary Column-->
          <div class="col-md-8">

            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

          </div>

      <?php endwhile; endif;  ?>
    </div>
   



      

      
<?php get_footer(); ?>








