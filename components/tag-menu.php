<div class="tag-menu-background" style="background-image: url('<?php echo wp_get_attachment_image_url(196); ?>')">
    <div class="tag-menu">
        <h3 class="title">MENU</h3>

        <?php wp_nav_menu('food') ?>

        <div class="foods">
            <?php
            // Get all category food
            $allFoods = new WP_Query(['category_name' => 'Food', 'posts_per_page' => 8]);

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
</div>