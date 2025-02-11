<div class="nav-menu">
    <div class="menu-logo">
        <div class="logo-image"><img src="<?php echo get_theme_mod('my-page-callout-logo'); ?>" alt="Logo"></div>
        <div class="logo-text"><?php echo get_theme_mod('my-page-callout-name-logo') ?></div>
    </div>
    <?php
    wp_nav_menu([
        'theme_location' => 'primary'
    ]);
    ?>
    <div class="menu-contact">
        <div class="email"><?php echo get_theme_mod('my-header-menu-callout-text-email'); ?></div>
        <div class="phone"><i class="fa-solid fa-phone"></i> <?php echo get_theme_mod('my-header-menu-callout-number-phone') ?></div>
    </div>
</div>