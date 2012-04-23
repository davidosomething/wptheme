<?php
/* ==|== JavaScript ========================================================= */
function THEME_NAME_enqueue_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('THEME_NAME-plugins',
    get_stylesheet_directory_uri() . '/js/plugins.js',
    array('jquery'), '1', true);
  wp_enqueue_script('THEME_NAME-script',
    get_stylesheet_directory_uri() . '/js/script.js',
    array('jquery', 'THEME_NAME-plugins'), '1', true);
}
add_action('wp_enqueue_scripts', THEME_NAME . '_enqueue_scripts');
