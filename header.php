<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/global-styles.css" />
</head>

<body>
    <?php echo wp_nav_menu(
        array(
            "menu" => 'top-menu',
            "container" => null,
            "menu_class" => 'top-navigation'
        )
    ); ?>

    <div class="container">