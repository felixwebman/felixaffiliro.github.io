<?php

function felix_theme_files() {
    wp_enqueue_style('felix-style', get_stylesheet_uri());
    wp_enqueue_script('felix-js', get_template_directory_uri() . '/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'felix_theme_files');

