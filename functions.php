<?php 
/* 
* My Theme Function
*/


// Theme Title
add_theme_support( 'title-tag');


// Theme CSS and jQuery File calling

function shihab_css_js_file_calling(){
    wp_enqueue_style('shihab-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');


    //jQuery calling
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'shihab_css_js_file_calling'); 