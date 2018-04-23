<?php
/*
add_action('wp_enqueue_scripts', 'enqueue_parent_style');
function enqueue_parent_style(){

    wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css');
}
*/

function mychildtheme_enqueue_styles() {
$parent_style = 'twentyseventeen';

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/drill/style.css' );
wp_enqueue_style( 'child-style',
get_stylesheet_directory_uri() . '/drill/style.css',
array( $parent_style )
);
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );
//wp_enqueue_script('main', get_stylesheet_directory_uri() . '/main.js',false,'1.1',"all");

function adding_scripts() {

    wp_register_script('main',get_stylesheet_directory_uri() . '/drill/main.js', array('jquery'),'1.1', true);
    wp_enqueue_script('main');
    }
    
    add_action( 'wp_enqueue_scripts', 'adding_scripts' );




?>