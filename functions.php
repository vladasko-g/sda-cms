<?php

$dir = get_template_directory();

include_once "{$dir}/rest/rest-register.php";

// enable featured image for posts
add_theme_support( 'post-thumbnails' );

// register menus
register_nav_menus(
    array(
        'top-menu' => 'functionphp-top-menu',
        'bottom-menu' => 'functionphp-bottom-menu',
    )
);
