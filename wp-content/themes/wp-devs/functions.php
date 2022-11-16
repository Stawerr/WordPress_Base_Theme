<?php

require get_template_directory() . '/inc/customizer.php';

function wpdevs_load_scripts(){
    //Carregar o CSS
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');
    //Carregar as fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
    //Carregar o ficheiro Dropdown.JS (poderia ser o main.js)
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );


function wpdevs_config(){

	$textdomain = 'wp-devs';
	load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'wp_devs_main_menu' => __('Main Menu','wp-devs'),
            'wp_devs_footer_menu' => __('Footer Menu','wp-devs')
        )
    ); 
    //Add custom hero
    $args=array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support( 'custom-header', $args );
    //Add image to post
    add_theme_support( 'post-thumbnails' );
    //Add custom logo
    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true,
    ) );
    //Read feed rss
    add_theme_support( 'automatic-feed-links' );
    //Better html support
    add_theme_support('html5', array(
        'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'
    ));
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'wpdevs_config', 0 );

//Widgets
add_action( 'widgets_init', 'wpdevs_sidebars', 0 );
function wpdevs_sidebars(){
    register_sidebar(
        array(
            'name' => __('Blog Sidebar','wp-devs'),
            'id' => 'sidebar-blog',
            'description' => __('This is the Blog Sidebar. You can add your widgets here','wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Service 1','wp-devs'),
            'id' => 'services-1',
            'description' => __('First Service Area','wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Service 2','wp-devs'),
            'id' => 'services-2',
            'description' => __('Second Service Area','wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Service 3','wp-devs'),
            'id' => 'services-3',
            'description' => __('Third Service Area','wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}
if( ! function_exists('wp_body_open')){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}