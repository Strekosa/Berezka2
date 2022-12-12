<section class="features wrapper ">
    <div class="features__main w-100 text-center container-boxed column">

        <?php
        $title = get_sub_field('title');
        if ($title) : ?>
            <h2 class="features__title"> <?php echo $title; ?></h2>
        <?php endif; ?>

        <?php
        // check if the nested repeater field has rows of data
        if (have_rows('features_list')):?>
            <div class="features__list ">
                <?php while (have_rows('features_list')): the_row();
                    $icon = get_sub_field('icon');
                    $text = get_sub_field('text');
                    ?>
                    <div class="features__item  flex column align-center ">
                        <?php
                        if ($icon) : ?>
                            <div class="features__item-icon flex align-center justify-center">     <?php echo $icon; ?></div>
                        <?php endif; ?>
                        <?php
                        if ($text) : ?>
                            <p class="features__item-text"> <?php echo $text; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile;
                ?>
            </div>
        <?php endif; ?>

        <?php
        $text = get_sub_field('text');
        if ($text) : ?>
            <div class="features__text">   <?php echo $text; ?></div>
        <?php endif; ?>
    </div>
</section>