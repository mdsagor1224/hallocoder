<?php

function hallo_css_js_file_calling(){
    wp_enqueue_style('hallo-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '4.0.0', 'all');
    wp_enqueue_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');


    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '4.0.0', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0', 'true');
}  
add_action('wp_enqueue_scripts','hallo_css_js_file_calling');


//google fonts 

function hallo_add_google_fonts(){
    wp_enqueue_style('hallo_goolge_fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,500&family=Inter:wght@400;500;700&family=Kaisei+Decol&family=Oswald&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500&display=swap', false);
}
add_action('wp_enqueue_scripts','hallo_add_google_fonts');