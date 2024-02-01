<?php
/*
Plugin Name: Anti-Dairy WP Plugin
Description: A simple plugin that swaps images depending on the current language.
Version: 1.0
Author: Jordan Halliday
Author URI: https://jordancadehalliday.com/
*/

// Enqueue the JS file
function enqueue_my_js() {
    // Get the plugin directory URL
    $plugin_url = plugin_dir_url(__FILE__);

    // Enqueue the JS file
    wp_enqueue_script('my-js', $plugin_url . 'lang-img-swap.js', array('jquery'), '1.0', true);
}

// Hook into WordPress
add_action('wp_enqueue_scripts', 'enqueue_my_js');