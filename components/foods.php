<div class="foods-container">
    <h1 class="title"><?php echo get_theme_mod('my-food-callout-title'); ?></h1>
    <div class="slogan"><?php echo get_theme_mod('my-food-callout-slogan'); ?></div>

    <div class="filters">
        <?php wp_nav_menu([
            'theme_location' => 'food'
        ]) ?>
    </div>

    <div class="foods">
        <?php
        $allFoods = new WP_Query(['category_name' => $post->post_title]);

        if ($allFoods->have_posts()) :
            while ($allFoods->have_posts()) : $allFoods->the_post(); ?>
                <div class="food">
                    <div class="food-image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt=""></div>
                    <div class="food-content">
                        <div class="title"><?php the_title(); ?></div>
                        <div class="text"><?php the_content(); ?></div>
                    </div>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); // When get data in WP_Query should reset post data
        ?>
    </div>
</div>