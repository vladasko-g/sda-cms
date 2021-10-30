<?php

function preparePost($the_query)
{
    global $post;

    $the_query->the_post();

    $preparedPost = [
        'id' => $post->ID,
        'title' => $post->post_title,
        'slug' => $post->post_name,
        'date' => $post->post_date,
        'excerpt' => get_the_excerpt(),
        'featuredImage' => get_the_post_thumbnail_url(),
    ];

    return $preparedPost;
}

function queryPosts($args)
{
    $the_query = new WP_Query($args);

    $result;

    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $post = preparePost($the_query);

            $result[] = $post;
        }
    }

    wp_reset_postdata();

    return $result;
}
