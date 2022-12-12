<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Berezka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

    <!-- NOSCRIPT -->
    <noscript>
        Your Browser Does Not Support JavaScript. Please Update Your Browser and reload page. Have a nice day!
    </noscript>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'berezka'); ?></a>

    <header>
        <div class="header-main">
            <div class="flex container-boxed justify-between  align-center">
                <!-- .site-branding -->
                <div class="site-branding flex align-center">
                    <?php the_custom_logo(); ?>
                </div>

                <div class="flex align-center">
                    <button class="nav-tgl show-on-mobile" type="button" aria-label="toggle menu">
                        <!-- Three dividers in the hamburger button--><span aria-hidden="true"></span>
                    </button>
                    <nav class="header-menu">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu_class' => 'menu flex',

                        )); ?>

                        <div class="header-contact show-on-mobile pos-rel">
                            <?php if ($field = get_field('phone', 'options')): ?>
                                <a href="tel:<?php echo($field) ?>"><?php echo $field ?></a>
                            <?php endif; ?>

                            <?php if ($field = get_field('connect_link', 'options')): ?>
                                <div class="header-contact-link "><?php echo $field ?>


                                </div>
                            <?php endif; ?>
                            <?php
                            $featured_posts = get_field('connect_form', 'options');
                            if ($featured_posts):?>
                                <div class=" header-contact-form pos-abs">
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
                    </nav>

                </div>
                <div class="header-contact flex column align-end hide-mobile pos-rel">
                    <?php if ($field = get_field('phone', 'options')): ?>
                        <a href="tel:<?php echo($field) ?>"><?php echo $field ?></a>
                    <?php endif; ?>

                    <?php if ($field = get_field('connect_link', 'options')): ?>
                        <div class="header-contact-link "><?php echo $field ?>


                        </div>
                    <?php endif; ?>
                    <?php
                    $featured_posts = get_field('connect_form', 'options');
                    if ($featured_posts):?>
                        <div class=" header-contact-form pos-abs">
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

    </header><!-- #masthead -->
