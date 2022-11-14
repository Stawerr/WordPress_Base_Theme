<?php

function wpdevs_load_scripts(){
    //Carregar o CSS
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');
    //Carregar as fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );