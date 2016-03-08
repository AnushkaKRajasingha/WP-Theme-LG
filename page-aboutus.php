<?php
/*
  Template Name:  About Us 
*/
?>

<!--<?php echo the_slug(); ?> WILL DISPLAY PAGE SLUG-->

<?php get_header(); ?>

     <div class="row">


        <!--MENU SIDEBAR-->
        <?php get_sidebar('aboutus-nav'); ?>

         
            <!--Regular News Page Layout------------------------------------------------------------------------------------------------------------------------>
              <div class="col-md-9">
                 <?php if( is_page('about-us') ) : ?>

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

                  <?php elseif( is_page('careers') ) : ?>
                    <!--REPEAT FOR DIFFERENT PAGES-->

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


                  <?php elseif( is_page('company') ) : ?>
                    <!--REPEAT FOR DIFFERENT PAGES-->

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

                  <?php elseif( is_page('group-cares') ) : ?>
                    <!--REPEAT FOR DIFFERENT PAGES-->

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


                  <?php elseif( is_page('people') ) : ?>
                    <!--REPEAT FOR DIFFERENT PAGES-->

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

                  <?php elseif( is_page('sustainability') ) : ?>
                    <!--REPEAT FOR DIFFERENT PAGES-->

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


                  <?php elseif( is_page('values') ) : ?>
                    <!--REPEAT FOR DIFFERENT PAGES-->


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




                  <?php else : ?>
                    <H1>No Content</H1>
                  <?php endif; ?>

              </div>

    
     </div>

     
      
<?php get_footer(); ?>