<?php

function themeslug_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'starter_new_section_name' , array(
        'title'    => __( 'Visible Section Name', 'starter' ),
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'starter_new_setting_name' , array(
        'default'   => '#dddddd',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
        'label'    => __( 'Header Color', 'starter' ),
        'section'  => 'starter_new_section_name',
        'settings' => 'starter_new_setting_name',
    ) ) );

    $wp_customize->add_control( 'setting_id', array(
        'type' => 'date',
        'priority' => 10, // Within the section.
        'section' => 'starter_new_section_name', // Required, core or custom.
        'label' => __( 'Date' ),
        'description' => __( 'This is a date control with a red border.' ),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => 'border: 1px solid #900',
            'placeholder' => __( 'mm/dd/yyyy' ),
        ),
        'active_callback' => 'starter_new_setting_name',
    ) );

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
            'footer-about-menu' => __( 'Footer about' ),
            'footer-sector' => __( 'Footer sector' ),
            'footer-solutions' => __( 'Footer solutions' ),
            'footer-privacy' => __( 'Footer privacy' ),
        )
    );
}
add_action( 'init', 'register_menus' );