<?php get_header(); ?>

     <div class="row">
            <div class="col-md-12">              
            <?php do_action('collect_related_args_v1',array('category','post_tag'));?> 
            </div>
		<div class="col-md-12"><?php do_action('display_related','Search Related','any',array('category','post_tag'));?></div>	
     </div>
     
<?php get_footer(); ?>