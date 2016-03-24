<?php 
/**
*TEMPLATE FOR DISPLAYING SINGLE PAGE POSTS FOR SUB-MARKETS
*
*/
 get_header(); ?>



<div class="row sub-markets-home">

  <?php get_sidebar('markets-nav'); ?>

      <div class="col-md-6">
			<?php do_action('collect_related_args_v1',array('about-me','my-likes'));?> 
      </div>

  <!--Content Sidebar-->
  <?php get_sidebar('products-rt'); ?>
     


</div>      
  
  <?php get_sidebar('products-imggrid'); ?>
      
<?php get_footer(); ?>








