<?php

function register_theme_styles() {

    /**
     * Bootstrap CDN
     */
    //wp_enqueue_style('bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all');

    /**
     * Slick Slider CDN
     */
    //wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
    //wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array('slick-css'), '1.8.1');
    
    wp_enqueue_style(
        'style-base',
        get_template_directory_uri() . '/assets/css/style.min.css',
        array(),
        filemtime(get_theme_file_path('/assets/css/style.min.css')),
        'all'
    );
    
}
add_action('wp_enqueue_scripts', 'register_theme_styles');