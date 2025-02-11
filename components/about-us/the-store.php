<div class="the-store-container">
    <div class="the-store">
        <div class="left">
            <img src="<?php echo get_theme_mod('my-about-us-callout-image-store'); ?>" alt="">
        </div>
        <div class="right">
            <h2 class="title"><?php echo get_theme_mod('my-about-us-callout-title-store'); ?></h2>
            <div class="text"><?php echo get_theme_mod('my-about-us-callout-content-store'); ?></div>
            <h3>Opening Hours</h3>
            <div class="time-open">
                <div class="open">
                    <div class="day"><?php echo get_theme_mod('my-about-us-callout-day-normal-store'); ?></div>
                    <div class="time"><?php echo get_theme_mod('my-about-us-callout-time-normal-store') ?></div>
                </div>
                <div class="open">
                    <div class="day"><?php echo get_theme_mod('my-about-us-callout-day-ceremony-store') ?></div>
                    <div class="time"><?php echo get_theme_mod('my-about-us-callout-time-ceremony-store') ?></div>
                </div>
            </div>
            <div class="social-media">
                <?php if (get_theme_mod('my-page-callout-display-facebook') == 'yes'): ?>
                    <div class="facebook"><a href="<?php echo get_theme_mod('my-page-callout-link-facebook') ?>"><i class="fa-brands fa-facebook"></i></a></div>
                <?php endif; ?>
                <?php if (get_theme_mod('my-page-callout-display-github') == 'yes'): ?>
                    <div class="github"><a href="<?php echo get_theme_mod('my-page-callout-link-github') ?>"><i class="fa-brands fa-github"></i></a></div>
                <?php endif; ?>
                <?php if (get_theme_mod('my-page-callout-display-tiktok') == 'yes'): ?>
                    <div class="tiktok"><a href="<?php echo get_theme_mod('my-page-callout-link-tiktok') ?>"><i class="fa-brands fa-tiktok"></i></a></div>
                <?php endif; ?>
                <?php if (get_theme_mod('my-page-callout-display-instagram') == 'yes'): ?>
                    <div class="instagram"><a href="<?php echo get_theme_mod('my-page-callout-link-instagram') ?>"><i class="fa-brands fa-instagram"></i></a></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>