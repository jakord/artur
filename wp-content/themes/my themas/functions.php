<?php
function load_style_script(){
	wp_enqueue_style('google_fonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');
	wp_enqueue_style('bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('font_style', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script("jquery");
	wp_enqueue_script('bootstrap-jquery', get_template_directory_uri() . '/js/bootstrap.js');
}

add_action('wp_enqueue_scripts', 'load_style_script');


register_nav_menus(array(
	'header_menu' => 'Меню в шапке',
));
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu' );
function my_wp_nav_menu( $args = '' ){
	$args['container'] = false;
	return $args;
}


add_theme_support('post-thumbnails');

register_sidebar(array(
	'name' => 'footer',
	'id' => 'footer',
	'before_widget' => '',
	'after_widget' => ''
	));
