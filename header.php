<!DOCTYPE html>
<html <?php language_attributes(); ?>
    <head>
        <title><?php bloginfo('name'); ?> – <?php is_front_page() ? bloginfo('description') : wp_title('–'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="elementor">
            <div class="elementor-element elementor-custom-grid e-con e-grid e-con-boxed e-parent">
                <div class="e-con-inner">
                    <div class="elementor-element e-con e-child">
                        <div class="i2g-navigation mt-4">
                            <div class="i2g-navigation-container border-bottom space-between">
                                <div class="i2g-inline-container">
                                    <div class="icon-aside">
                                        <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/icons/trophy.svg"/>
                                        <div class="icon-text">10+ Jahre Expertise</div>
                                    </div>
                                    <div class="icon-aside ms-3">
                                        <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/icons/cooperation.svg"/>
                                        <div class="icon-text">100+ Partner</div>
                                    </div>
                                    <div class="icon-aside ms-3">
                                        <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/icons/corporate.svg"/>
                                        <div class="icon-text">999+ realisierte Projekte</div>
                                    </div>
                                </div>
                                <div class="i2g-inline-container">
                                    <div class="icon-aside ms-3">
                                        <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/icons/phone.svg"/>
                                        <div class="icon-text"><a href="#">030 – 12345678</a></div>
                                    </div>
                                    <?php wp_nav_menu( array( 'theme_location' => 'header-extra-menu', 'container_class' => 'i2g-menu-extra-wrap' ) ); ?>
                                    <?php the_widget( 'avico_language_menu_widget' ); ?>
                                </div>
                            </div>
                            <div class="i2g-navigation-container space-between">
                                <div class="logo-container">
                                    <a href="/startseite">
                                        <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/logo.svg" alt="Logo" />
                                    </a>
                                </div>
                                <div class="i2g-inline-container">
                                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'i2g-menu-wrap' ) ); ?>
                                    <a href="#" class="btn btn-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#call_modal">Rückruftermin vereinbaren</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="call_modal" tabindex="-1" aria-labelledby="call_modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="call_modalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                        echo do_shortcode('[wpforms id="1001"]');
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
