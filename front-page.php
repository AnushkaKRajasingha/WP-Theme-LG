<?php get_header(); ?>
  
  <!-- Jumbotron -->
      <div class="slider">
        <?php 
            echo do_shortcode("[metaslider id=244]"); 
        ?>
      </div>
  

    <div class="row">
      <div class="col-md-4 has-feedback">

       

        <i id="search-icon2" class="glyphicon glyphicon-search form-control-feedback"></i>
        <input id="mysearch-bucket" type=" search" placeholder="Find a Product" class="form-control">

      </div>

      <div class="col-md-4">
        
          <h3 class="h3-nomargin"><span class="glyphicon glyphicon-circle-arrow-right"></span>Learn about Re-Seal Closures</h3>

      </div>

      <div class="col-md-4">
        
          <h3 class="h3-nomargin"><span class="glyphicon glyphicon-circle-arrow-right"></span>Use Transparent Film</h3>

      </div>
    </div>

    <div class="row">
      
      <!--Widgets are being used for 3 main buckets on home page-->
      <div class="col-md-4">
          <?php if (dynamic_sidebar('front-left' ) ); ?>
      </div>

      <div class="col-md-4">
          <?php if (dynamic_sidebar('front-center' ) ); ?>
      </div>

      <div class="col-md-4">
          <?php if (dynamic_sidebar('front-right' ) ); ?>
      </div>

    </div>


  <div class="row">
     
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

     <?php endwhile; endif; ?>

  </div>

     <hr>

    <!--PRODUCTS & MARKETS ADD"TL CONTENT-->

    


     <?php get_sidebar('products-imggrid'); ?>

     <hr>
            
  <div class="row home-multi">
    <div class="contact third">
    <h3>Contact</h3>
      <p>Lauterbach Group, Inc</p>
      <p>W222 N5710 Miller Way</p>
      <p>Sussex, WI 53089</p>
      <br>
      <p>Phone : 1-800-841-7301</p>
      <p>Email : info@lauterbachgroup.com</p>


    </div>

    <div class="follow third">
      <h3>Follow Us</h3>

          <!--Signup Form from Mailchimp-->
            <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                  <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                  </style>
                <div id="mc_embed_signup">
                  <form action="//lauterbachgroup.us2.list-manage.com/subscribe/post?u=fe64137ef8315369909620c61&amp;id=ae757077ac" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                      <div id="mc_embed_signup_scroll">
                        <label for="mce-EMAIL">Subscribe to our mailing list</label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fe64137ef8315369909620c61_ae757077ac" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                      </div>
                  </form>
                </div>




<!--End mc_embed_signup-->

                <div class="social">
                    <div class="fb"><i class="fa fa-facebook fa-social"></i></div>
                    <div class="linkedin"><i class="fa fa-linkedin fa-social"></i></div>
                    <div class="twitter"><i class="fa fa-twitter fa-social"></i></div>
                    <div class="youtube"><i class="fa fa-youtube fa-social"></i></div>
                </div>

    </div>

    <div class="news third" id="news-blog">
        
        <h3>News</h3>

        <?php

            $args = array(
              'post_type'     => 'news',
              'post_status'   => 'publish',
              'post_per_page' => '6',
              'order'         => 'DESC',
              'orderby'       => 'date'
              
              );

            $query = new WP_Query ( $args );
          ?>

          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

              <ul class="front-page-posts">
                <li>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
              </ul>

          <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
  </div>


<?php get_footer(); ?>