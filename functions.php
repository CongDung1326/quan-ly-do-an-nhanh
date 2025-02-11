<?php

// Setup
function my_setup()
{
    // Register to use theme_location in wp_nav_menu()
    register_nav_menus([
        'primary' => __('primary menu'),
        'footer' => __('footer menu'),
        'food' => __('food menu')
    ]);

    // Add thumbnail post
    add_theme_support('post-thumbnails');

    // Add theme support
    add_theme_support('post-formats', ['gallery']);
}

add_action('after_setup_theme', 'my_setup'); // End

// My custom
function my_custom($wp_customize)
{
    my_custom_food($wp_customize);
    my_custom_header($wp_customize);
    my_custom_page($wp_customize);
    my_custom_footer($wp_customize);
    my_custom_about_us($wp_customize);
}

add_action('customize_register', 'my_custom'); // End

// Add customizing header
function my_custom_header($wp_customize)
{
    // Add panel
    $wp_customize->add_panel('my-header-callout-panel', [
        'title' => 'Header Callout',
        'description' => 'Custom menu'
    ]);
    // Add section
    $wp_customize->add_section('my-header-callout-section', [
        'title' => 'Custom Information And Banner',
        'panel' => 'my-header-callout-panel'
    ]); // End

    // Email
    $wp_customize->add_setting('my-header-menu-callout-text-email', [
        'default' => 'abcxyz@gmail.com'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-header-menu-callout-text-email-control', [
        'label' => 'Email',
        'section' => 'my-header-callout-section',
        'settings' => 'my-header-menu-callout-text-email',
    ])); // End

    // Number phone
    $wp_customize->add_setting('my-header-menu-callout-number-phone', [
        'default' => '0346.976.586'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-header-menu-callout-number-phone-control', [
        'label' => 'Number Phone',
        'section' => 'my-header-callout-section',
        'settings' => 'my-header-menu-callout-number-phone'
    ])); // End

    // Add banner
    $wp_customize->add_setting('my-header-banner-callout-image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "my-header-banner-callout-image-control", [
        'label' => 'Banner Image',
        'section' => 'my-header-callout-section',
        'settings' => 'my-header-banner-callout-image'
    ]));
} // End

// Insert database in wordpress db: wp_custom_plugin
function insert_db_custom_plugin($data = [])
{
    if (empty($data)) return;

    global $wpdb;

    $table_name = $wpdb->prefix . 'custom_plugin';

    $wpdb->insert($table_name, $data);

    register_activation_hook(__FILE__, 'insert_db_custom_plugin');
} // End

// Add ob_start to use header and wp_redirect()
function do_output_buffer()
{
    ob_start();
}

add_action('init', "do_output_buffer"); // End

// Reload page
function my_reload()
{
    wp_redirect('.');
} // End

// My custom page Page
function my_custom_page($wp_customize)
{
    // Add panel
    $wp_customize->add_panel('my-page-callout-panel', [
        'title' => 'Page Callout',
        'desciprtion' => 'Settings this page'
    ]);

    // Add section logo
    $wp_customize->add_section('my-page-callout-logo-section', [
        'title' => 'Custom Logo',
        'panel' => 'my-page-callout-panel'
    ]);
    // Name logo
    $wp_customize->add_setting('my-page-callout-name-logo', [
        'default' => 'Don Vau'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-name-logo-control', [
        'label' => 'Name Logo',
        'section' => 'my-page-callout-logo-section',
        'settings' => 'my-page-callout-name-logo',
    ])); // End

    // Add logo
    $wp_customize->add_setting('my-page-callout-logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'my-page-callout-logo-control', [
        'label' => 'Logo Image',
        'section' => 'my-page-callout-logo-section',
        'settings' => 'my-page-callout-logo'
    ])); // End

    // Add section display link
    $wp_customize->add_section('my-page-callout-display-link-section', [
        'title' => 'Display Link',
        'panel' => 'my-page-callout-panel'
    ]);
    // Display social media
    $wp_customize->add_setting('my-page-callout-display-facebook', [
        'default' => 'no'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-dislpay-facebook-control', [
        'label' => 'Display Facebook',
        'section' => 'my-page-callout-display-link-section',
        'settings' => 'my-page-callout-display-facebook',
        'type' => 'select',
        'choices' => [
            'yes' => 'Yes',
            'no' => 'No'
        ]
    ]));

    $wp_customize->add_setting('my-page-callout-display-github', [
        'default' => 'no'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-dislpay-github-control', [
        'label' => 'Display Github',
        'section' => 'my-page-callout-display-link-section',
        'settings' => 'my-page-callout-display-github',
        'type' => 'select',
        'choices' => [
            'yes' => 'Yes',
            'no' => 'No'
        ]
    ]));

    $wp_customize->add_setting('my-page-callout-display-tiktok', [
        'default' => 'no'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-dislpay-tiktok-control', [
        'label' => 'Display TikTok',
        'section' => 'my-page-callout-display-link-section',
        'settings' => 'my-page-callout-display-tiktok',
        'type' => 'select',
        'choices' => [
            'yes' => 'Yes',
            'no' => 'No'
        ]
    ]));

    $wp_customize->add_setting('my-page-callout-display-instagram', [
        'default' => 'no'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-dislpay-instagram-control', [
        'label' => 'Display Instagram',
        'section' => 'my-page-callout-display-link-section',
        'settings' => 'my-page-callout-display-instagram',
        'type' => 'select',
        'choices' => [
            'yes' => 'Yes',
            'no' => 'No'
        ]
    ]));
    // End

    // Add section social media
    $wp_customize->add_section('my-page-callout-custom-link-section', [
        'title' => 'Custom Link',
        'panel' => 'my-page-callout-panel'
    ]);
    // Add social media
    $wp_customize->add_setting('my-page-callout-link-facebook', [
        'default' => 'https://www.facebook.com/CDungDepTry'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-link-facebook-control', [
        'label' => 'Link Facebook',
        'section' => 'my-page-callout-custom-link-section',
        'settings' => 'my-page-callout-link-facebook',
    ]));

    $wp_customize->add_setting('my-page-callout-link-github', [
        'default' => 'https://github.com/CongDung1326'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-link-github-control', [
        'label' => 'Link Github',
        'section' => 'my-page-callout-custom-link-section',
        'settings' => 'my-page-callout-link-github',
    ]));

    $wp_customize->add_setting('my-page-callout-link-tiktok', [
        'default' => 'https://www.tiktok.com/@c0ng_dung'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-link-tiktok-control', [
        'label' => 'Link Tiktok',
        'section' => 'my-page-callout-custom-link-section',
        'settings' => 'my-page-callout-link-tiktok',
    ]));

    $wp_customize->add_setting('my-page-callout-link-instagram', [
        'default' => 'https://www.instagram.com/congdung_don/'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-page-callout-link-instagram-control', [
        'label' => 'Link Instagram',
        'section' => 'my-page-callout-custom-link-section',
        'settings' => 'my-page-callout-link-instagram',
    ]));
    // End
} // End

// My custom page Food
function my_custom_food($wp_customize)
{
    // Add panel
    $wp_customize->add_panel('my-food-callout-panel', [
        'title' => 'Food Callout',
        'description' => 'Custom page food'
    ]);
    // Add section
    $wp_customize->add_section('my-food-callout-section', [
        'title' => 'Custom Title And Slogan',
        'panel' => 'my-food-callout-panel'
    ]);

    // Title
    $wp_customize->add_setting('my-food-callout-title', [
        'default' => 'The title'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-food-callout-title-control', [
        'label' => 'Title',
        'section' => 'my-food-callout-section',
        'settings' => 'my-food-callout-title'
    ]));
    // Slogan
    $wp_customize->add_setting('my-food-callout-slogan', [
        'default' => 'This is slogan'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-food-callout-slogan-control', [
        'label' => 'Slogan',
        'section' => 'my-food-callout-section',
        'settings' => 'my-food-callout-slogan'
    ]));
} // End

// My custom footer
function my_custom_footer($wp_customize)
{
    // Add section
    $wp_customize->add_section('my-footer-callout-section', [
        'title' => 'Footer Callout'
    ]);

    // Content
    $wp_customize->add_setting('my-footer-callout-content', [
        'default' => 'This website create by Don Vau'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-footer-callout-content-control', [
        'label' => 'Content',
        'section' => 'my-footer-callout-section',
        'settings' => 'my-footer-callout-content'
    ]));
} // End

// My custom about us
function my_custom_about_us($wp_customize)
{
    // Add panel
    $wp_customize->add_panel('my-about-us-callout-panel', [
        'title' => 'About Us Callout',
        'description' => 'Custom About Us'
    ]);

    // Add section banner
    $wp_customize->add_section('my-about-us-callout-banner-section', [
        'title' => 'Custom Banner',
        'panel' => 'my-about-us-callout-panel'
    ]); // End
    // Slogan
    $wp_customize->add_setting('my-about-us-callout-content', [
        'default' => 'Welcome to the my store fast food of us'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-content-control', [
        'label' => 'Content',
        'section' => 'my-about-us-callout-banner-section',
        'settings' => 'my-about-us-callout-content'
    ])); // End

    // Add banner
    $wp_customize->add_setting('my-about-us-banner-callout-image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "my-about-us-banner-callout-image-control", [
        'label' => 'Banner Image',
        'section' => 'my-about-us-callout-banner-section',
        'settings' => 'my-about-us-banner-callout-image'
    ])); // End

    // Add section about store
    $wp_customize->add_section('my-about-us-callout-store-section', [
        'title' => 'Custom About Store',
        'panel' => 'my-about-us-callout-panel'
    ]);
    // Image store
    $wp_customize->add_setting('my-about-us-callout-image-store');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'my-about-us-callout-image-store-control', [
        'label' => 'Image',
        'settings' => 'my-about-us-callout-image-store',
        'section' => 'my-about-us-callout-store-section'
    ])); // End
    // Title store
    $wp_customize->add_setting('my-about-us-callout-title-store', [
        'default' => get_theme_mod('my-page-callout-name-logo') . ' Store'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-title-store-control', [
        'label' => 'Title',
        'settings' => 'my-about-us-callout-title-store',
        'section' => 'my-about-us-callout-store-section'
    ])); // End
    // Content store
    $wp_customize->add_setting('my-about-us-callout-content-store', [
        'default' => 'This is content store you can write all the history in your store you wanna'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-content-store-control', [
        'label' => 'Content',
        'settings' => 'my-about-us-callout-content-store',
        'section' => 'my-about-us-callout-store-section'
    ])); // End
    // Day open store (normal)
    $wp_customize->add_setting('my-about-us-callout-day-normal-store', [
        'default' => 'Monday-Friday'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-day-normal-store-control', [
        'label' => 'Day Normal',
        'settings' => 'my-about-us-callout-day-normal-store',
        'section' => 'my-about-us-callout-store-section'
    ])); // End
    // Time open store (normal)
    $wp_customize->add_setting('my-about-us-callout-time-normal-store', [
        'default' => '09:00 - 16:00'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-time-normal-store-control', [
        'label' => 'Time Normal',
        'settings' => 'my-about-us-callout-time-normal-store',
        'section' => 'my-about-us-callout-store-section'
    ])); // End
    // Day open store (ceremony)
    $wp_customize->add_setting('my-about-us-callout-day-ceremony-store', [
        'default' => 'Saturday-Sunday'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-day-ceremony-store-control', [
        'label' => 'Day Ceremony',
        'settings' => 'my-about-us-callout-day-ceremony-store',
        'section' => 'my-about-us-callout-store-section'
    ])); // End
    // Time open store (ceremony)
    $wp_customize->add_setting('my-about-us-callout-time-ceremony-store', [
        'default' => '10:00 - 19:00'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-time-ceremony-store-control', [
        'label' => 'Time Ceremony',
        'settings' => 'my-about-us-callout-time-ceremony-store',
        'section' => 'my-about-us-callout-store-section'
    ])); // End

    // Add section event
    $wp_customize->add_section('my-about-us-callout-event-section', [
        'title' => 'Custom About Event',
        'panel' => 'my-about-us-callout-panel'
    ]);
    // Title event
    $wp_customize->add_setting('my-about-us-callout-title-event', [
        'default' => 'When you come on Sunday you will get free fries'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-title-event-control', [
        'label' => 'Title',
        'settings' => 'my-about-us-callout-title-event',
        'section' => 'my-about-us-callout-event-section'
    ])); // End
    // Content event
    $wp_customize->add_setting('my-about-us-callout-content-event', [
        'default' => 'This event will be ended 10/10/2024, and when you come on in 16/10/2024 you will get free coupon'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-content-event-control', [
        'label' => 'Content',
        'settings' => 'my-about-us-callout-content-event',
        'section' => 'my-about-us-callout-event-section'
    ])); // End
    // Image event
    $wp_customize->add_setting('my-about-us-callout-image-event');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'my-about-us-callout-image-event-control', [
        'label' => 'Image',
        'settings' => 'my-about-us-callout-image-event',
        'section' => 'my-about-us-callout-event-section'
    ])); // End

    // Add section product
    $wp_customize->add_section('my-about-us-callout-product-section', [
        'title' => 'Custom About Product',
        'panel' => 'my-about-us-callout-panel'
    ]);
    // Title product
    $wp_customize->add_setting('my-about-us-callout-title-product', [
        'default' => 'The material in the chicken fries',
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-title-product-control', [
        'label' => 'Title',
        'settings' => 'my-about-us-callout-title-product',
        'section' => 'my-about-us-callout-product-section'
    ])); // End
    // Content product
    $wp_customize->add_setting('my-about-us-callout-content-product', [
        'default' => 'Imported and produced in vietnamese'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'my-about-us-callout-content-product-control', [
        'label' => 'Content',
        'settings' => 'my-about-us-callout-content-product',
        'section' => 'my-about-us-callout-product-section'
    ])); // End
}

// Check have chilren category
function checkCategoryHaveChild($category_name_parent, $category_name_child)
{
    $parent = get_categories(['name' => $category_name_parent]);

    if (count($parent) > 0) {
        $term_id = $parent[0]->term_id;

        $child = get_categories([
            'parent' => $term_id,
            'name' => $category_name_child
        ]);
        if (count($child) > 0) return true;
        else return false;
    }

    return false;
} // End

// Check XSS with HTML
function checkXSS($string)
{
    return htmlspecialchars(strip_tags($string));
} // End

// Get medium count (category)
function getMediumCountCategory($category_name)
{
    $get_category = new WP_Query(['category_name' => $category_name]);
    $category_id = $get_category->query_vars['cat'];

    if ($category_id != null) {
        $result = get_category($category_id)->count / 2;

        if (is_float($result)) {
            return [
                'first' => floor($result),
                'second' => round($result)
            ];
        } else {
            return [
                'first' => $result,
                'second' => $result
            ];
        }
    }


    return [
        'first' => null,
        'second' => null
    ];
}
