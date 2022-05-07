<?php

$dir = get_template_directory();

include_once "{$dir}/rest/rest-register.php";

// enable featured image for posts
add_theme_support('post-thumbnails');

// register menus
register_nav_menus(
    array(
        'top-menu' => 'functionphp-top-menu',
        'bottom-menu' => 'functionphp-bottom-menu',
    )
);

function add_styles()
{
    wp_enqueue_style('style-global',  get_template_directory_uri() . '/global-styles.css');
}
add_action('wp_enqueue_scripts', 'add_styles');

// function tvs_widget_init()
// {
//     register_sidebar(array(
//         'name' => __('Main Sidebar', 'tvs'),
//         'id' => 'main-sidebar',
//         'before_widget' => '<section id="%1$s" class="widget %1$s">',
//         'after_widget' => '</section>',
//     ));
// }

// add_action('widgets_init', 'tvs_widget_init');
