<?php
/*
* My Theme Function
*/

// Theme Title
add_theme_support('title-tag');

// Theme css and Js File
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


//Theme function
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
}

add_action('customize_register','hallo_customizar_register');


// Menu Register
register_nav_menu('main_menu',__('Main Menu','hallocoder'));

// function hallo_nav_description($item_output,$item,$args){
//     if (!empty ($item->description)) {
       
//         $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' .
        
//         $item->description . '</span>' . $args->link_after . '</a>', $item_output);
//     }

//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el','hallo_nav_description', 10, 3);





