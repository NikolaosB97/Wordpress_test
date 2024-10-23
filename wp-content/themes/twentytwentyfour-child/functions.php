<?php
function portfolio_theme_enqueue_assets() {
    // Carica il file CSS del tema
    wp_enqueue_style('portfolio-style', get_stylesheet_uri());

    // Carica il file JavaScript personalizzato
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'portfolio_theme_enqueue_assets');
?>