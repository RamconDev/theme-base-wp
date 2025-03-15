<?php

function register_theme_scripts() {
    /**
     * Bootstrap CDN
     */
    //wp_enqueue_script('bootstrap-scripts', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);

    /**
     * Slick Corousel CDN
     */
    //wp_enqueue_script('slick-carousel', get_template_directory_uri() . '/assets/js/lib/slick.min.js', array('jquery'), '1.8.1', true);

    wp_enqueue_script(
        'script-base',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery'),
        filemtime(get_theme_file_path('/assets/js/script.js')),
        true
    );

}
add_action('wp_enqueue_scripts', 'register_theme_scripts');