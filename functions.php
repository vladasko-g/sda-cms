<?php

$dir = get_template_directory();

include_once "{$dir}/rest/rest-register.php";

register_nav_menus(
    array(
        'top-menu' => 'functionphp-top-menu',
        'bottom-menu' => 'functionphp-bottom-menu',
    )
);
