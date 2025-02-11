<?php get_template_part('components/header'); ?>

<main class="about-us-container">
    <div class="review" style="background-image: url('<?php echo get_theme_mod('my-about-us-banner-callout-image'); ?>')">
        <h1 class="title"><?php echo $post->post_title; ?></h1>
        <p class="text"><?php echo get_theme_mod('my-about-us-callout-content'); ?></p>
    </div>

    <?php get_template_part('components/about-us/the-store'); ?>
    <?php get_template_part('components/about-us/the-event'); ?>
    <?php get_template_part('components/about-us/the-product'); ?>
</main>

<?php get_template_part('components/footer'); ?>