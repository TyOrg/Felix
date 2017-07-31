<?php

function theme_styles() {
    
    //wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.0.3', 'all' );
    
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

    	//wp_enqueue_style( 'bootstrap-css', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css', array(), '3.0.3', 'all' );
    
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
    
    global $wp_scripts;
    
    
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

//add_filter( 'show_admin_bar', '_return_true' );




add_theme_support( 'menus' );

function register_theme_menus() {
    register_nav_menus(
        array(
            'header-menu' => _( 'Header Menu')
        )    
    );
    
}
add_action( 'init', 'register_theme_menus' );
?>