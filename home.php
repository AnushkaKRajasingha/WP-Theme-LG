<?php get_header(); ?>

     <div class="row">


        <!--MENU SIDEBAR-->
        <?php get_sidebar('news-nav'); ?>

        <div class="col-md-6">

            <div class="page-header">
                <h1><?php wp_title(''); ?></h1>
              </div>
          
            <?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>

              <article class="posts">

                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>
                  By <?php the_author( ); ?> 
                  on <?php echo the_time('l, F js, Y'); ?>
                </p>

                <?php the_excerpt(); ?>

              </article>
        

            <?php endwhile; else: ?>

              <div class="page-header">
                <h1>Hold Up.....Wait</h1>
              </div>

              <p>There is no content</p>

            <?php endif; ?>

        </div>

        
        <!--NEWS Tertiary-->
        <?php get_sidebar('news-tertiary'); ?>


     </div>

      
<?php get_footer(); ?>