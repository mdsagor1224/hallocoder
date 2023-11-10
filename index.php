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
    
    <?php wp_head();?>

</head>
<body <?php body_class();?>>
    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <a href="#"><img src="<?php echo get_theme_mod('hallo_logo') ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav'));?>
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer();?>
</body>
</html>