<?php
function src_resources() {
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'jquery-1.12.0.min', '/js/jquery-1.12.0.min.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'src_resources' );

//Font awesome

function font_awesome() {
  if (!is_admin()) {
    wp_register_style('font-awesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css');
    wp_enqueue_style('font-awesome');
  }
}
add_action('wp_enqueue_scripts', 'font_awesome');

//Menu

register_nav_menus(
	array(
		'primary' => __( 'Primary Menu' )
	)
);
add_action( 'genesis_meta', 'wpb_add_google_fonts', 5 );

//Goggle Fonts

function wpb_add_google_fonts() {
	echo '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700" media="screen">';
}

/*Featured images*/

add_theme_support( 'post-thumbnails' );

/* Убираем отступ в Хроме */
/*function my_admin_bar_init() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('admin_bar_init', 'my_admin_bar_init');*/