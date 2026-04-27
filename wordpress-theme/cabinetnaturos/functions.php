<?php
function cabinetnaturos_enqueue_assets() {
    wp_enqueue_style('cabinetnaturos-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('cabinetnaturos-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'cabinetnaturos_enqueue_assets');
