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
<footer>
    <div class="elementor">
        <div class="elementor-element elementor-custom-grid e-con e-grid e-con-boxed e-parent">
            <div class="e-con-inner">
                <div class="elementor-element e-con e-child">
                    <div class="i2g-footer-wrap">
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <a href="<?=$home_link;?>">
                                    <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/logo.svg" alt="Logo" />
                                </a>
                            </div>
                            <div>
                                <p><?=$labels['footer']['footer_text'];?><br/><br/>
                                    <?=$labels['footer']['footer_address'];?><br/><br/>
                                    <?php wp_nav_menu( array( 'theme_location' => 'footer-contact', 'container_class' => 'i2g-footer-menu-wrap' ) ); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-3">
                            <p>
                                <strong><?=$labels['footer']['footer_link_row_about'];?></strong>
                            </p>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-about-menu', 'container_class' => 'i2g-footer-menu-wrap' ) ); ?>
                        </div>
                        <div class="col-3">
                            <p>
                                <strong><?=$labels['footer']['footer_link_row_industries'];?></strong>
                            </p>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-sector', 'container_class' => 'i2g-footer-menu-wrap' ) ); ?>
                        </div>
                        <div class="col-3">
                            <p>
                                <strong><?=$labels['footer']['footer_link_row_solutions'];?></strong>
                            </p>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-solutions', 'container_class' => 'i2g-footer-menu-wrap' ) ); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="text-center"><strong>inno2consult</strong> – powered by inno2grid</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <p>&copy; 2015–<?=date('Y', time())?> <?=$labels['footer']['footer_copyright'];?></p>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-privacy', 'container_class' => 'i2g-footer-menu-horizontal-wrap' ) ); ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>