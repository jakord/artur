<?php

/**
* загружаемые скрипты и стили
*/
function load_style_script(){
	wp_enqueue_style('google_fonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');
	wp_enqueue_style('bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_script('jquery-google', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
	wp_enqueue_script('style-jquery-ui-1.9.2', get_template_directory_uri() . '/js/bootstrap.js');
}

/**
* загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');

/**
* регистрируем меню
**/
register_nav_menus(array(
	'header_menu' => 'Меню в шапке',
));
?>