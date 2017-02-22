<?php

function freelancer_page_custom_init()
{
    register_post_type('page',
        array('public' => false)
    );
}
add_action('init', 'freelancer_page_custom_init');

function freelancer_post_new_custom_init()
{
    register_post_type('post',
        array('public' => false)
    );
}
add_action('init', 'freelancer_post_new_custom_init');

function freelancer_post_custom_init()
{
    register_post_type('post-new',
        array('public' => false)
    );
}
add_action('init', 'freelancer_post_custom_init');







