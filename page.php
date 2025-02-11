<?php get_template_part('components/header'); ?>

<?php if (checkCategoryHaveChild('Food', $post->post_title)): ?>
    <main class="food-container">
        <h2 class="title"><?php echo $post->post_title; ?></h2>

        <?php get_template_part('components/foods'); ?>
    </main>
<?php else: ?>
    <?php
    if (have_posts()) {
        while (have_posts()): the_post(); ?>
            <main class="page">
                <h2 class="title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </main>
    <?php endwhile;
    }
    ?>
<?php endif; ?>

<?php get_template_part('components/footer'); ?>