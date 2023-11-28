<?php
/*
* This template for displaying the Header
*/
?>


<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head();?>

</head>
<body <?php body_class();?>>
    <header id="header_area" class="<?php echo get_theme_mod('hallo_menu_position') ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <a href="<?php echo home_url()?>"><img src="<?php echo get_theme_mod('hallo_logo') ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav'));?>
                </div>
            </div>
        </div>
    </header>