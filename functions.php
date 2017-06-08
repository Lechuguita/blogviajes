<?php

function blogviajes_styles(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css');
		wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri().'/js/bootstrap.min.js');
		

}
add_action('wp_enqueue_scripts', 'blogviajes_styles');

add_theme_support('post-thumbnails');

/** Nueva Navegacion **/

register_nav_menus( array(
  'menu_principal' => __('Menu principal', 'blogViajes')

) );

add_image_size('entradas', 750, 490, true);
add_image_size('entradas', 650, 490, true);
add_image_size('entradas', 750, 490, true);

