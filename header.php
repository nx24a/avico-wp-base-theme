<?php
$lang = get_query_var('lang');
if($lang !== "") {
    $GLOBALS['avico_ml_dict']['lang'] = get_query_var('lang');

}
$lang = $GLOBALS['avico_ml_dict']['lang'];
$labels = $GLOBALS['avico_ml_dict']['labels'][$lang];

$base = $GLOBALS['avico_ml_dict']['settings'][$lang];
$home_link = "/".$lang."/".$base['home_link'];

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <title><?php bloginfo('name'); ?> – <?=wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="elementor">
    <div class="elementor-element elementor-custom-grid e-con e-grid e-con-boxed e-parent">
        <div class="e-con-inner">
            <div class="elementor-element e-con e-child pos-relative">
                <div class="i2g-navigation mt-4">
                    <div class="i2g-navigation-container border-bottom space-between">
                        <div class="i2g-inline-container">
                            <span><?=$labels['header']['slogan'];?></span>
                        </div>
                        <div class="i2g-inline-container hidden-md-down">
                            <div class="icon-aside ms-3">
                                <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/icons/phone.svg"/>
                                <div class="icon-text"><a href="tel:004930238884240">+49 30 23 88 84 – 240</a></div>
                            </div>
                            <?php wp_nav_menu( array( 'theme_location' => 'header-extra-menu', 'container_class' => 'i2g-menu-extra-wrap' ) ); ?>
                            <?php the_widget( 'avico_language_menu_widget' ); ?>
                        </div>
                    </div>
                    <div class="i2g-navigation-container space-between">
                        <div class="logo-container">
                            <a href="<?=$home_link;?>">
                                <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/logo.svg" alt="Logo" />
                            </a>
                        </div>
                        <div class="i2g-inline-container hidden-md-down">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'i2g-menu-wrap' ) ); ?>
                            <a href="#" class="btn btn-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#call_modal"><?=$labels['header']['call_back_cta_label'];?></a>
                        </div>
                        <div class="i2g-inline-container hidden-md-up">
                            <div class="menu-button navbar">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobileToggle" aria-controls="navbarMobileToggle" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse pos-absolute i2g-mobile-navigation" id="navbarMobileToggle">
                    <div class="elementor-element elementor-custom-grid e-con e-grid e-con-boxed e-parent">
                        <div class="e-con-inner">
                            <div class="elementor-element e-con e-child">
                                <?php the_widget( 'avico_language_menu_widget' ); ?>

                                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'i2g-mobile-navigation-wrap' ) ); ?>
                                <div class="icon-aside my-3">
                                    <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/icons/phone.svg"/>
                                    <div class="icon-text"><a href="tel:004930238884240">+49 30 23 88 84 – 240</a></div>
                                </div>
                                <a href="#" class="btn btn-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#call_modal"><?=$labels['header']['call_back_cta_label'];?></a>
                            </div>
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
        <div class="modal-content i2g-modal-content">
            <div class="modal-body">
                <div class="content mb-4">
                    <span class="i2g-tag tag-primary"><?=$labels['header']['modal_content']['tag_label'];?></span>
                    <h3><?=$labels['header']['modal_content']['modal_headline'];?></h3>
                    <p><?=$labels['header']['modal_content']['modal_text'];?></p>
                </div>
                <?php
                echo do_shortcode($labels['header']['call_back_shortcode']);
                ?>
            </div>
        </div>
    </div>
</div>




