<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Example
 */

?>


<div class="rooms__item flex column">
    <div class="rooms__item-img">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
    </div>

    <div class="rooms__item-title  ">
        <span> <?php the_title(); ?></span>
        <?php $area = get_field('area');
        if (!empty($area)): ?>
            <?php echo $area; ?>
        <?php endif; ?>

        <?php $beds = get_field('beds');
        if (!empty($beds)): ?>
            <h6> <?php echo $beds; ?></h6>
        <?php endif; ?>
    </div>

    <div class="rooms__item-info flex column align-center">
        <?php
        // check if the nested repeater field has rows of data
        if (have_rows('facilities')):?>
            <ul class="rooms__item-facilities  flex flex-wrap align-center  ">
                <?php while (have_rows('facilities')): the_row();
                    $title = get_sub_field('text');
                    ?>

                    <?php
                    $title = get_sub_field('text');
                    if ($title): ?>
                        <li><?php echo $title; ?></li>
                    <?php endif; ?>

                <?php endwhile;
                ?>
            </ul>
        <?php endif; ?>
        <div class="flex column align-center">
            <?php $price = get_field('price');
            if (!empty($price)): ?>
                <h4 class="rooms__item-price ">  <?php echo $price; ?></h4>
            <?php endif; ?>

            <a class=" button" href="<?php the_permalink(); ?>">

                <?php _e('Бронировать '); ?>
            </a>
        </div>
    </div>

</div>
