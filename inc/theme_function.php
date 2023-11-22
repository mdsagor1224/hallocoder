<?php

function hallo_customizar_register($wp_customize){
    // Header Area Function
    $wp_customize->add_section('hallo_header_area', array(
        'title' =>__('Header Area', 'hallocoder'), 
        'description' => 'If you Interested to update your header area , you can do it here.'
    ));

    $wp_customize->add_setting('hallo_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png', 
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hallo_logo',array(
        'label' => 'Logo Upload',
        'section' => 'hallo_header_area',
        'setting' => 'hallo_logo'
    )));

    //Menu Position Option
    $wp_customize->add_section('hallo_menu_option',array(
        'title' => __('Menu Position Option','hallocoder'),
        'description' => 'If you interested to change your menu position you can do it.'
    ));

    $wp_customize->add_setting('hallo_menu_position',array(
        'default' => 'right_menu',
    ));

    $wp_customize-> add_control('hallo_menu_position',array(
        'label' => 'Menu Position',
        'description' => 'Select Your Menu Position',
        'setting' => 'hallo_menu_position',
        'section' => 'hallo_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),

    ));    
    
    //Footer Option
    $wp_customize->add_section('hallo_footer_option',array(
        'title' => __('Footer Option','hallocoder'),
        'description' => 'If you interested to change or update your footer position you can do it.'
    ));

    $wp_customize->add_setting('hallo_copyright_section',array(
        'default' => '&copy; Copyright 2021 | HalloCoder BD',
    ));

    $wp_customize-> add_control('hallo_copyright_section',array(
        'label' => 'Copyright Text',
        'description' => 'If need you can update  your copyright text from here',
        'setting' => 'hallo_copyright_section',
        'section' => 'hallo_footer_option',

    ));


    // Theme Color
    $wp_customize->add_section('hallo_colors', array(
        'title' => __('Theme Color','hallocoder'),
        'description' => 'If need you can change your theme color',
    ));

    $wp_customize->add_setting('hallo_bg_color',array(
        'default' => '#fff',
    ));

    $wp_customize->add_control(new WP_Customize_color_control($wp_customize, 'hallo_bg_color', array(
        'label' => 'Background Color',
        'section' => 'hallo_colors',
        'settings' => 'hallo_bg_color',
    )));   
    
    $wp_customize->add_setting('hallo_primary_color',array(
        'default' => '#ea1a70',
    ));

    $wp_customize->add_control(new WP_Customize_color_control($wp_customize, 'hallo_primary_color', array(
        'label' => 'Primary Color',
        'section' => 'hallo_colors',
        'settings' => 'hallo_primary_color',
    )));
}

add_action('customize_register','hallo_customizar_register');

function hallo_theme_color_cus(){
    ?>
        <style>
        body{background:<?php echo get_theme_mod('hallo_bg_color');?> }

        :root{ --pink:<?php echo get_theme_mod('hallo_primary_color');?>}
        </style>
    <?php
}

add_action('wp_head','hallo_theme_color_cus');