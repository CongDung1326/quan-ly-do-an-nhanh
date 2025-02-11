<div class="chefs-background">
    <h3 class="title">Chefs</h3>
    <div class="chefs">
        <?php
        // Get all category material
        $allChef = new WP_Query(
            [
                'category_name' => 'Chef', // Query category have name 'Material'
            ]
        );

        if ($allChef->have_posts()) :
            while ($allChef->have_posts()) : $allChef->the_post(); ?>
                <div class="chef">
                    <div class="chef-image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt=""></div>
                    <div class="chef-content">
                        <h4 class="title"><?php the_title(); ?></h4>
                        <div class="text"><?php the_content(); ?></div>
                    </div>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); // When get data in WP_Query should reset post data
        ?>
    </div>
</div>