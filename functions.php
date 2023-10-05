<?php 
/* 
* My Theme Function
*/


// Theme Title
add_theme_support( 'title-tag');


// Theme CSS and jQuery File calling

function shihab_css_js_file_calling(){
    wp_enqueue_style('shihab-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'shihab_css_js_file_calling');