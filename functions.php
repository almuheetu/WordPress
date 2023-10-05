<?php 
/* 
* My Theme Function
*/


// Theme Title
add_theme_support( 'title-tag');


// Theme CSS and jQuery File calling

function shihab_css_js_file_calling(){

}
add_action('wp_enqueue_scripts', 'shihab_css_js_file_calling');