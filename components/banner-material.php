<div class="banner-material-background" style="background-image: url('<?php echo wp_get_attachment_image_url(197); ?>')">
    <div class="banner-material">
        <h3 class="title">THE MATERIAL WE USE</h3>
        <div class="box-material">
            <?php
            // Get all category material
            $allMeterial = new WP_Query(
                [
                    'category_name' => 'Material', // Query category have name 'Material'
                    'posts_per_page' => 3, // Limited post
                    'order' => 'ASC' // Sort in mysql order by ASC
                ]
            );

            if ($allMeterial->have_posts()) :
                while ($allMeterial->have_posts()) : $allMeterial->the_post(); ?>
                    <div class="material">
                        <div class="material-image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt=""></div>
                        <div class="material-content">
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
</div>