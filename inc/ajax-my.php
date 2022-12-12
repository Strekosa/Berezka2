<?php

function loadmore_rooms()
{
    $args = array(
        'post_type' => 'rooms',
        'orderby' => 'description',
        'order' => 'ASC',
        'posts_per_page' => 999,
        'post_status' => 'publish',
        'hide_empty' => true,
        'tax_query' => array(
            array(
                'taxonomy' => 'popularity',
                'terms' => 'popular',
                'field' => 'slug',
            )
        ),

    );


    if (isset($_POST['offset'])) {
        $args['offset'] = $_POST['offset'];
    }

    $the_query2 = new WP_Query($args);
    if ($the_query2->have_posts()) : ?>

        <?php while ($the_query2->have_posts()) :
            $the_query2->the_post();
            get_template_part('template-parts/content-rooms');
            ?>

        <?php endwhile; ?>

    <?php endif;

    die();
}

add_action('wp_ajax_loadmore-rooms', 'loadmore_rooms');
add_action('wp_ajax_nopriv_loadmore-rooms', 'loadmore_rooms');
