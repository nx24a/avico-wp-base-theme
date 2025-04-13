<?php

function themeslug_customize_register( $wp_customize ) {

/*
     $wp_customize->add_setting( 'starter_new_setting_name' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'starter_new_section_name' , array(
        'title'    => __( 'Theme options', 'starter' ),
        'priority' => 30
    ) );

    $wp_customize->add_section( 'starter_new_section_name_subsection' , array(
        'title'    => __( 'Visible Section Name 223', 'starter' ),
        'section' => 'starter_new_section_name',
        'settings' => 'starter_new_setting_name',
        'priority' => 50
    ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'avico_theme[footer_text]', array(
        'label' => __( 'Footer Text', 'theme_textdomain' ),
        'type' => 'textarea',
        'section' => 'starter_new_section_name_subsection',
        'settings' => 'starter_new_setting_name',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'avico_theme[log2o]', array(
        'label' => __( 'Logo Image', 'theme_textdomain' ),
        'section' => 'starter_new_section_name',
        'settings' => 'starter_new_setting_name',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'avico_theme[logo]', array(
        'label' => __( 'Logo Image', 'theme_textdomain' ),
        'section' => 'starter_new_section_name',
        'settings' => 'starter_new_setting_name',
        'mime_type' => 'image',
    ) ) );

 */

    $wp_customize->add_panel( 'avico_theme_options', array(
        'title' => __( 'Theme Options' ),
        'description' => 'hello, let\'s do this!', // Include html tags such as <p>.
        'priority' => 160, // Mixed with top-level-section hierarchy.
    ) );

    $wp_customize->add_section( 'avico_theme_options_baseline' , array(
        'title' => 'some menu',
        'panel' => 'avico_theme_options',
    ) );

    $wp_customize->add_setting( 'starter_new_setting_name' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'avico_theme[footer_text]', array(
        'label' => __( 'Example Text', 'theme_textdomain' ),
        'type' => 'text',
        'section' => 'avico_theme_options_baseline',
        'settings' => 'starter_new_setting_name',
    ) ) );

}
add_action( 'customize_register', 'themeslug_customize_register' );

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

function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Main Menu' ),
            'header-extra-menu' => __( 'Header Extra Menu' ),
            'header-language-menu' => __( 'Header Language Menu' ),
            'footer-contact' => __( 'Footer Contact' ),
            'footer-about-menu' => __( 'Footer about' ),
            'footer-sector' => __( 'Footer sector' ),
            'footer-solutions' => __( 'Footer solutions' ),
            'footer-privacy' => __( 'Footer privacy' ),
        )
    );
}
add_action( 'init', 'register_menus' );

function wpdocs_theme_setup() {
    add_image_size( 'i2g-tile-image-default-size', 372, 100, array( 'center', 'center' ) );
    add_image_size( 'i2g-tile-insights-big-size', 386, 217, array( 'center', 'center' ) );
    add_image_size( 'i2g-tile-insights-aside-size', 140, 194, array( 'center', 'center' ) );
    add_image_size( 'i2g-image-abstract-aside-size', 620, 600, array( 'center', 'center' ) );
    add_image_size('i2g-team-image-default-size', 600,600, array('center', 'center'));
    add_image_size('i2g-post-tile-default-size', 300, 400 , array('center', 'center'));
    add_image_size('i2g-post-tile-big-size', 415, 430 , array('center', 'center'));
    add_image_size('i2g-post-header-default-size', 867, 340 , array('center', 'center'));
}

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );

function dwp_mime($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'dwp_mime');