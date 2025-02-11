<div class="the-product-container">
    <h2 class="title"><?php echo get_theme_mod('my-about-us-callout-title-product'); ?></h2>
    <p class="text"><?php echo get_theme_mod('my-about-us-callout-content-product') ?></p>

    <div class="the-product">
        <div class="left">
            <?php
            $post_left = new WP_Query([
                'category_name' => 'About product',
                'offset' => getMediumCountCategory('About product')['first'],
            ]);

            if ($post_left->have_posts()) {
                while ($post_left->have_posts()): $post_left->the_post(); ?>
                    <div class="box-text">
                        <h4 class="title"><?php the_title() ?></h4>
                        <p class="text"><?php the_content(); ?></p>
                    </div>
            <?php endwhile;
            }
            wp_reset_postdata(); ?>
        </div>
        <div class="center">
            <img src="<?php echo wp_get_attachment_image_url(269); ?>" alt="">
        </div>
        <div class="right">
            <?php
            $post_right = new WP_Query([
                'category_name' => 'About product',
                'offset' => getMediumCountCategory('About product')['second'],
            ]);

            if ($post_right->have_posts()) {
                while ($post_right->have_posts()): $post_right->the_post(); ?>
                    <div class="box-text">
                        <h4 class="title"><?php the_title() ?></h4>
                        <p class="text"><?php the_content(); ?></p>
                    </div>
            <?php endwhile;
            }
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>