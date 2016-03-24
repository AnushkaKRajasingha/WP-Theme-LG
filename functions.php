<?php


function theme_styles() {

	wp_enqueue_style( 'bootstrap_css' , get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css' , get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts' , 'theme_styles' );


function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv' , 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
	wp_register_script( 'respond_js' , 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'myjs', get_template_directory_uri() . '/js/myjs.js' );





}
add_action( 'wp_enqueue_scripts' , 'theme_js' );

//Will Hide Admin bar when uncommented
add_filter( 'show_admin_bar', '__return_false');


add_theme_support( 'menus' );

function register_theme_menus() {

	register_nav_menus(
		array(

			'header-menu'  => __('Header Menu'),
			'markets-nav'  => __('Markets Menu'),
			'news-nav'  => __('News Menu'),
			'about-us'  => __('About Us'),
			'products'  => __('Products')

			)

	 );
}


add_action('init', 'register_theme_menus');

//TO CREATE A NEW WIDGET COPY AND PASTE ONE FROM BELOW
function create_widget( $name, $id, $description ) {

    register_sidebar(array(
        'name' 			=> __( $name ),   
        'id' 			=> $id, 
        'description' 	=> __( $description ),
        'before_widget' => '<div class="widget home-page-buckets">',
        'after_widget' 	=> '</div>',
        'before_title' 	=> '<h3>',
        'after_title'	=> '</h3>'
    ));

}

//USED FOR HOME PAGE
create_widget('Front Page Left', 'front-left', 'Displays in left bucket');
create_widget('Front Page Center', 'front-center', 'Displays in center bucket');
create_widget('Front Page Right', 'front-right', 'Displays in right bucket');

create_widget('News Tertiary Info Right', 'news-tertiary', 'Displays in right bucket on lower row');





//READ MORE FOR EXCERPTS

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


//PAGE SLUG ADDITION


function the_slug() {
$post_data = get_post($post->ID, ARRAY_A);
$slug = $post_data['post_name'];
return $slug; }

//Add Post Featured Image
add_theme_support('post-thumbnails');


//CUSTOM IMAGE SIZES FOR POST_THUMBNAIL
add_image_size( 'pdf-image', 250, 9999 ); //300 pixels wide (and unlimited height)

require_once 'custom_actions.php';
?>