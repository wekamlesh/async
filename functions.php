<?php
/* 
Theme functions
@package Async
*/

function async_enqueue_scripts(){

    //Register Styles
    wp_register_style('style-stylesheet', get_stylesheet_uri() );
    wp_register_style('main-stylesheet',get_template_directory_uri() . '/assets/css/main.css',[],false,'all' );
    wp_register_style('bootstrap-stylesheet',get_template_directory_uri() . '/assets/vendor/css/bootstrap.min.css',[],false,'all' );

    //Register Scripts
    wp_register_script('main-js',get_template_directory_uri() . '/assets/js/main.js',[],false,true );
    wp_register_script('bootstrap-js',get_template_directory_uri() . '/assets/vendor/js/bootstrap.bundle.min.js',['jquery'],false,true );

    //Enqueue Styles
    wp_enqueue_style('bootstrap-stylesheet');
    wp_enqueue_style('style-stylesheet');
    wp_enqueue_style('main-stylesheet');

    //Enqueue Scripts
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'async_enqueue_scripts');

?>
