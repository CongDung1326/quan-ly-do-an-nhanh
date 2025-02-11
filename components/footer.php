    <footer>
        <div class="nav-menu">
            <div class="menu-logo">
                <div class="image"><img src="<?php echo get_theme_mod('my-page-callout-logo'); ?>" alt=""></div>
                <div class="text"><?php echo get_theme_mod('my-page-callout-name-logo') ?></div>
            </div>
            <?php
            wp_nav_menu([
                'theme_location' => 'footer'
            ]);
            ?>
            <div class="create-by"><?php echo get_theme_mod('my-footer-callout-content'); ?></div>
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
    </footer>

    </div> <!-- End container -->

    <?php wp_footer(); ?>
    </body>

    </html>