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
                                    <div class="i2g-language-menu">
                                        <ul class="menu">
                                            <li class="active">
                                                <a href="#">DE</a>
                                            </li>
                                            <li>
                                                <a href="#">EN</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="i2g-navigation-container space-between">
                                <div class="logo-container">
                                    <a href="#">
                                        <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/logo.svg" alt="Logo" />
                                    </a>
                                </div>
                                <div class="i2g-inline-container">
                                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'i2g-menu-wrap' ) ); ?>
                                    <a href="#" class="btn btn-primary">Rückruftermin vereinbaren</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>