<?php
//WordPress Short code

function basic_shortcode(){
    return"Sagor Ahmed is a web application Developer";
}
add_shortcode('sagor','basic_shortcode');


function button_shortcode($atts, $content = null){
    $values = shortcode_atts(array(
        'url' => '#'
    ), $atts);

    return '<a class="button" href="'.esc_attr($values['url']).'"> '.$content . '</a>';
}

add_shortcode('button','button_shortcode');