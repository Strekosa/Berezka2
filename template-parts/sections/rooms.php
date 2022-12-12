<section class="rooms wrapper container-boxed flex column align-center">
    <div class="rooms__main flex column align-center">

        <?php
        $title = get_sub_field('title');
        if ($title) : ?>
            <h2 class=""> <?php echo $title; ?></h2>
        <?php endif; ?>


            <?php

            $args = array(
                'post_type' => 'rooms',
                'orderby' => 'description',
                'order' => 'ASC',
                'posts_per_page' => 4,
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
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <div class="rooms__list ">
                <?php while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $do_not_duplicate = $post->ID;
                    $area = get_field('area');
                    $price = get_field('price');
                    $beds = get_field('beds');
                    $beds = get_field('facilities');
                    get_template_part('template-parts/content-rooms')
                    ?>

                <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>


            <div class="lm-btn loadmore-rooms w-100 flex justify-center ">
                <?php

                ?>

                <button class="rooms__button button" id="loadmore-rooms" ">
                View more
                </button>

            </div>

        </div>
</section>


