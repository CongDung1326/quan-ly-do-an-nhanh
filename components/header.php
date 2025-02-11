<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- My Css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- My Js -->
    <script src="<?php echo (get_template_directory_uri() . '/js/slides-bar.js'); ?>" defer></script>
    <script src="<?php echo (get_template_directory_uri() . '/js/tag-menu.js'); ?>" defer></script>
    <!-- Get wp css and js -->
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
    <div class="container">
        <header style="background-image: url('<?php echo get_theme_mod('my-header-banner-callout-image'); ?>')">
            <?php get_template_part('components/menu') ?>

            <?php
            // Check the post is home to show slider bar
            is_home() ? get_template_part('components/sliders-bar') : "";
            ?>
        </header>