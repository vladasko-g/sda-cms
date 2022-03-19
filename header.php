<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/global-styles.css" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="main-header">
        <?php echo wp_nav_menu(
            array(
                "menu" => 'top-menu',
                "container" => null,
                "menu_class" => 'top-navigation'
            )
        ); ?>
    </header>

    <div class="container">