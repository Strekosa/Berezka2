<section class="popular-rooms wrapper container-boxed flex column align-center">
    <div class="popular-rooms__main flex column align-center">


        <?php
        $title = get_sub_field('title');
        if ($title) : ?>
            <h2 class=""> <?php echo $title; ?></h2>
        <?php endif; ?>


        <?php
        $featured_posts = get_sub_field('rooms_list');
        if ($featured_posts): ?>
            <div class="popular-rooms__list ">
                <?php foreach ($featured_posts as $post):
                    setup_postdata($post);
                    ?>
                    <div class="popular-rooms__item flex column">
                        <div class="popular-rooms__item-img">
                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                        </div>

                        <div class="popular-rooms__item-title  ">
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

                        <div class="popular-rooms__item-info flex column align-center">
                            <?php
                            // check if the nested repeater field has rows of data
                            if (have_rows('facilities')):?>
                                <ul class="popular-rooms__item-facilities  flex flex-wrap align-center  ">
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
                                    <h4 class="popular-rooms__item-price ">  <?php echo $price; ?></h4>
                                <?php endif; ?>

                                <?php
                                $link = get_field('link');
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="clinic-link button general"
                                       href="<?php echo esc_url($link_url); ?>"
                                       target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>

                <?php endforeach;
                ?>
            </div>
            <?php
            wp_reset_postdata();
        endif; ?>
    </div>

</section>
