
<section class="gallery">
    <div class="container-boxed flex column ">

        <?php
        $images = get_sub_field('gallery');
        if ($images): ?>
            <div class="gallery-slider">

                <?php foreach ($images as $image): ?>
                    <div class="gallery__item slick-slid flex align-center justify-center">

                        <a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>">
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>">
                        </a>

                    </div>
                <?php endforeach; ?>

            </div>

        <?php endif; ?>

        <?php
        $link = get_sub_field('link');
        if ($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button gallery__button"
               href="<?php echo esc_url($link_url); ?>"
               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>


    </div>
</section>