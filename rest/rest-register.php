<?php

include_once "rest-callbacks.php";

$customRestNamespace = 'custom-api';

// wp-json/custom-api/posts
function register_rest_route_posts()
{
    global $customRestNamespace;

    register_rest_route($customRestNamespace, '/posts', array(
        'methods' => 'GET',
        'callback' => 'custom_get_posts',
    ));
}

// i.e. wp-json/custom-api/post/postas-1
function register_rest_route_post()
{
    global $customRestNamespace;

    register_rest_route($customRestNamespace, '/post/(?P<slug>[a-zA-Z0-9-]+)', array(
        'methods' => 'GET',
        'callback' => 'custom_get_post',
    ));
}

add_action('rest_api_init', 'register_rest_route_post');
add_action('rest_api_init', 'register_rest_route_posts');
