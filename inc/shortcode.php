<?php
//WordPress Short code

function basic_shortcode(){
    return"Sagor Ahmed is a web application Developer";
}
add_shortcode('sagor','basic_shortcode');

// button shortcode
function button_shortcode($atts, $content = null){
    $values = shortcode_atts(array(
        'url' => '#'
    ), $atts);

    return '<a class="button" href="'.esc_attr($values['url']).'"> '.$content . '</a>';
}

add_shortcode('button','button_shortcode');


// shortcode and custom post

function service_shortcode($atts){
    ob_start();
    
    $query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => 3,
        'order' => 'ABC',
        'orderby' => 'title'
    ));

    if ($query -> have_posts()) {?>

        <section id="service_area">
            <div class="container">
                <div class="row">


                <?php 
                    while($query->have_posts() ) : $query->the_post();
                ?>
                    <div class="col-md-4">
                        <div class="child_service">
                            <h2><?php the_title();?></h2>
                            <?php echo the_post_thumbnail('service');?>
                            <?php the_excerpt();?>
                            
                        </div>
                    </div>


                    <?php 
                        endwhile; wp_reset_postdata();
                    ?>
               </div>
            </div>
        </section>

        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}

add_shortcode('service','service_shortcode');