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

// pagenav Function

function hallo_pagenav(){
    global $wp_query, $wp_rewrite;
    $page = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1; 
    $args['base'] = str_replace(99999999999, '%#%', get_pagenum_link(99999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '</pre>
        <div class="wp_pagenav">';
            if($total ==1 && $max > 1) $pages = '<p class="pages"> Page ' . $current. '<span> of </span>' .
            $max . '</p>';
            echo $pages . paginate_links($args);
            if($max > 1) echo '</div><pre>';
        
    
}