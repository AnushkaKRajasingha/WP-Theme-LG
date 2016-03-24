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
        
          <h3 class="h3-nomargin"><span class="glyphicon glyphicon-circle-arrow-right"></span>Clean Release</h3>

      </div>

      <div class="col-md-4">
        
          <h3 class="h3-nomargin"><span class="glyphicon glyphicon-circle-arrow-right"></span>Craft Brewery</h3>

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


  <!--<div class="row">
     
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

     <?php endwhile; endif; ?>

  </div>-->

     <hr>

    <!--PRODUCTS & MARKETS ADD"TL CONTENT-->

    


     <?php
     
     do_action('display_featured','Featured Products & Markets','featured');
     
     ?>

     <hr>
            
  <div class="row home-multi">
    <div class="contact third">
    <h3>Contact</h3>
      <p>Lauterbach Group, Inc</p>
      <p>W222 N5710 Miller Way</p>
      <p>Sussex, WI 53089</p>
      <br>
      <p>Phone : 1-800-841-7301</p>
      <p>Email : <a href="mailto:info@lauterbachgroup.com?subject=Contact%20from%20website">info@lauterbachgroup.com</a></p>


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

              <h4>Or Follow us on Social Media</h4>
                <div class="social">
                    <div class="fb"><a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/lauterbachgroup/" target="_blank"><span class="fa fa-facebook"></span></a></div>
                    <div class="linkedin"><a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/company/lauterbach-group-inc" target="_blank"><span class="fa fa-linkedin"></span></a></div>
                    <div class="twitter"><a class="btn btn-social-icon btn-twitter" href="https://twitter.com/LauterbachGroup" target="_blank"><span class="fa fa-twitter"></span></a></div>
                    <div class="youtube"><a href="https://www.youtube.com/channel/UClIeicAvWo2gtrnk7Lk4JsQ" target="_blank"><i class="fa fa-youtube fa-social"></i></a></div>
                </div>

    </div>

    <div class="news third" id="news-blog">
        
        <h3>News</h3>

        <?php

            $args = array(
              'post_type'     => 'news',
              'post_status'   => 'publish',
              'posts_per_page' =>  3,
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