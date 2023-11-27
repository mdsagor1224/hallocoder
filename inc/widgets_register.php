<?php 

// Sidebar Register Function 

function hallo_widget_register(){
    register_sidebar(array(
        'name' => __('Main Widget Area','hallocoder'),
        'id' => 'sidebar-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'hallocoder'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer One','hallocoder'),
        'id' => 'footer-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'hallocoder'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    
    register_sidebar(array(
        'name' => __('Footer Two','hallocoder'),
        'id' => 'footer-2',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'hallocoder'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    
    register_sidebar(array(
        'name' => __('Footer Three','hallocoder'),
        'id' => 'footer-3',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'hallocoder'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Homepage Widget','hallocoder'),
        'id' => 'home-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'hallocoder'),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init','hallo_widget_register');