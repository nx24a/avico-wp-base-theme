<?php
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "/wp-content/themes/avico-wp-base-theme/assets/dist/css/normalize.min.css");
    wp_enqueue_style( 'bootstrap-styles', "/wp-content/themes/avico-wp-base-theme/assets/dist/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style( 'theme-styles', "/wp-content/themes/avico-wp-base-theme/assets/dist/css/theme.css");

    wp_enqueue_script('bootstrap-scripts', "/wp-content/themes/avico-wp-base-theme/assets/dist/bootstrap/js/bootstrap.bundle.min.js");
    wp_enqueue_script('theme-scripts', "/wp-content/themes/avico-wp-base-theme/assets/dist/js/theme.js");
}

add_action('wp_enqueue_scripts', 'add_normalize_CSS');

// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
    register_sidebar( array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );

// Register a new navigation menu
function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );