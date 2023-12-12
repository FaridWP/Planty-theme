<?php

function planty_load_scripts()
{
    wp_enqueue_style('planty-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'planty_load_scripts');


function planty_config()
{
    add_theme_support('custom-logo', array(
        'height' => 19,
        'width' => 201,
        'flex-height' => true,
        'flex-width' => true
    ));
}
add_action('after_setup_theme', 'planty_config', 0);
