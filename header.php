<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link rel="icon" href="<?php bloginfo('template_directory' );?>/favicon/">

    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    
    <title>
      <?php wp_title('|', true, 'right');?>
      <?php bloginfo('name')?>
    </title>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

         


    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
  <div class="site-wrapper">
    <div class="container">
      <div class="flex-logo-row">
        <div class="flex-logo-child1">
            <img src="/wp-content/uploads/2016/01/logo_transparent.png" alt="logo">
        </div>

        <div class="flex-logo-child2">
            <p>Begin your 48 hour prototype now <i class="fa fa-arrow-circle-o-right fa-my"></i></p>
        </div>
      </div>
    </div>

    <div class="navbar-wrapper">
      <div class="container flex-trial">

        <nav id="mynav" class="navbar navbar-inverse navbar-static-top">
          <div class="">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand" href="#">Project name</a>-->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              
              <?php  wp_nav_menu 
                (array(
                  'theme_location' => 'header-menu',
                  'menu'       => 'header-menu',
                  'menu_class' => 'nav navbar-nav flex-nav',
                  'container'  => 'false'
                  ));

                

              ?>

            </div>
          </div>
        </nav>
          <div class="search-bar has-feedback">
             
              <i id="search-icon" class="glyphicon glyphicon-search form-control-feedback"></i>
              <input id="mysearch2" type=" search" placeholder="search" class="form-control">
                        
          </div>
      </div>
    </div>

    <div class="container body-wrapper">

