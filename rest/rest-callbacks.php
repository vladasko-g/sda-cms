<?php

include_once "rest-helpers.php";

function custom_get_post($params)
{
    $slug = $params['slug'];

    $args = array(
        'name' => $slug,
        'post_type' => 'post',
        'post_status' => 'publish',
        'numberposts' => 1,
    );

    $post = queryPosts($args, true);

    return $post;
}

function custom_get_posts($params)
{
    $per_page_param = $params->get_param('per_page');
    $posts_per_page = $per_page_param ? $per_page_param : '50';

    $args = array(
        'posts_per_page' => $posts_per_page,
    );

    $posts = queryPosts($args, false);

    return $posts;
}
