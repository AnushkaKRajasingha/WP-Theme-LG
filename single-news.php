<?php 
/**
*TEMPLATE FOR DISPLAYING SINGLE PAGE POSTS FOR SUB-MARKETS
*
*/
 get_header(); ?>



<div class="row sub-markets-home">

  <?php get_sidebar('news-nav'); ?>

      <div class="col-md-6">
			<?php do_action('collect_related_args_v1',array('category','post_tag'));?> 
      </div>

  <!--Content Sidebar-->
  <?php get_sidebar('products-rt'); ?>
     


</div>      
  
  <?php do_action('display_related','LG News Related','news',array('category','post_tag'));?>
      
<?php get_footer(); ?>








