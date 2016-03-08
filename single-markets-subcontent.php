<?php 
/**
*TEMPLATE FOR DISPLAYING SINGLE PAGE POSTS FOR SUB-MARKETS
*
*/
 get_header(); ?>



<div class="row sub-markets-home">

  <?php get_sidebar('markets-nav'); ?>
    

      

      <div class="col-md-6">



        <div class="row">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!--Primary Column-->
              <div class="col-md-4">

                <?php the_post_thumbnail( 'small', array('class'=>'img-resp') ); ?>

              </div>

            <!--Secondary Column-->
              <div class="col-md-8">

                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

              </div>
          
          <?php endwhile; endif;  ?>

        </div>  
      </div>

  <!--Content Sidebar-->
  <?php get_sidebar('products-rt'); ?>
     


</div>
      

  <?php get_sidebar('products-imggrid'); ?>
      
<?php get_footer(); ?>








