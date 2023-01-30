<?php

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup() {    
    add_theme_support('post-thumbnails');    
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'primary' => 'Primary'
        )
    );
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');
function my_theme_scripts() {    
    wp_enqueue_style('endecode', get_template_directory_uri().'/style.css');
    wp_enqueue_style('my-theme-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'), '1', true);
    wp_enqueue_script('my-theme-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('popper'), '1', true);
}

/* SIDEBARS */

add_action('widgets_init', 'endecode_sidebars');
function endecode_sidebars() {
    register_sidebar(array(
        'id' => 'primary-sidebar',
        'name' => 'Primary Sidebar'
    ));
}

add_theme_support( 'custom-logo' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	add_image_size( 'custom_logo', 400, 100 );
}

add_filter( 'template_include', 'search_results_template' );
function search_results_template( $template ) {
    if ( is_search() ) {
        $template = locate_template( 'search.php' );
    }
    return $template;
}