<?php

// Theme Title
add_theme_support('title-tag');

// Post Thumbnail

add_theme_support('post-thumbnails', array('page','post'));
add_image_size('post-thumbnails', 970, 350, true);


// Excerpt to 40 word
function hallo_excerpt_more($more){
    return '<br> <br> <a class="readmore" href="'.get_permalink($post->ID) . '">' . 'Read More' . '</a>';
}

add_filter('excerpt_more', 'hallo_excerpt_more');

function hallo_excerpt_lenght($length){
    return 40;
}
add_filter('excerpt_length','hallo_excerpt_lenght', 999);