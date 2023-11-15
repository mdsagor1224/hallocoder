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
}

add_action('widgets_init','hallo_widget_register');