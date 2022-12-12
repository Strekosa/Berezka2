<?php
$image = get_sub_field('background');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
?>
<section class="hero">
    <div class="hero__image pos-rel ">
        <img src="<?php echo esc_url($image ['url']); ?>"
             alt="<?php echo esc_attr($image ['alt']); ?>"/>

        <div class="hero__main container-boxed flex justify-between  align-center pos-centr flex-sm-column">
            <div class="hero__text ">
                <?php
                if ($title) : ?>
                    <h1 class="hero__title"> <?php echo $title; ?></h1>
                <?php endif; ?>
                <?php
                if ($subtitle) : ?>
                    <h3 class="hero__subtitle"> <?php echo $subtitle; ?></h3>
                <?php endif; ?>
            </div>

            <div class="hero__form ">
                <?php
                $featured_posts = get_sub_field('form');
                if ($featured_posts):
                    ?>
                    <div class="">
                        <?php foreach ($featured_posts as $p):

                            // Setup this post for WP functions (variable must be named $post).
                            setup_postdata($p);

                            ?>
                            <div class="flex flex-wrap justify-center  flex-xs-column">

                                <?php
                                $cf7_id = $p->ID;
                                echo do_shortcode('[contact-form-7 id="' . $cf7_id . '" ]');
                                ?>

                            </div>
                        <?php
                        endforeach; ?>
                    </div>
                    <?php
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata();
                    ?>

                <?php endif; ?>

            </div>
        </div>

    </div>

</section>