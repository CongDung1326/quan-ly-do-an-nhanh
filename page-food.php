<?php get_template_part('components/header'); ?>

<main class="food-container">
    <h2 class="title"><?php echo $post->post_title; ?></h2>

    <?php get_template_part('components/foods'); ?>
</main>

<?php get_template_part('components/footer'); ?>