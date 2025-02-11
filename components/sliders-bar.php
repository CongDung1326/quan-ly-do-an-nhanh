<?php
$get_gallery_slide_bar = new WP_Query(['title' => 'Slide bar']); // Query post title have in array
$images = []; // Create to store id post

if ($get_gallery_slide_bar->have_posts()):
    while ($get_gallery_slide_bar->have_posts()): $get_gallery_slide_bar->the_post();
        $arrayGallery = get_post_gallery(get_the_ID(), false); // Get gallery in the post

        if (!empty($arrayGallery)) {
            $images = explode(',', $arrayGallery['ids']);
        }
    endwhile;
    wp_reset_postdata();
else:
    $images = null;
endif;
?>

<div class="slider__list">
    <?php
    if ($images !== null):
        foreach ($images as $image): ?>
            <div class="slider">
                <div class="image"><img src="<?php echo wp_get_attachment_url($image); ?>" alt="image banner"></div>
            </div>
    <?php
        endforeach;
    endif;
    ?>

    <div class="icon__right" onclick="next()"><i class="fa-solid fa-arrow-right"></i></div>
    <div class="icon__left" onclick="prev()"><i class="fa-solid fa-arrow-left"></i></div>

    <div class="dots">
        <?php
        if ($images !== null) {
            for ($i = 0; $i < count($images); $i++) {
                if ($i == 0): ?>
                    <div class="dot active">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                <?php
                else: ?>
                    <div class="dot">
                        <i class="fa-solid fa-circle"></i>
                    </div>
        <?php
                endif;
            }
        }
        ?>
    </div>
</div>