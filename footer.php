<footer>
    <div class="elementor">
        <div class="elementor-element elementor-custom-grid e-con e-grid e-con-boxed e-parent">
            <div class="e-con-inner">
                <div class="elementor-element e-con e-child">
                    <div class="i2g-footer-wrap">
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <a href="#">
                                    <img src="/wp-content/themes/avico-wp-base-theme/assets/dist/images/logo.svg" alt="Logo" />
                                </a>
                            </div>
                            <div>
                                <p>Wir entwickeln und realisieren nachhaltige, wirtschaftliche Lösungen für vernetzte Energie- und Mobilitätssysteme. Strategie, Technologie, Umsetzung – aus einer Hand. <br/><br/>
                                    inno2grid GmbH<br/>
                                    EUREF-Campus 12-13<br/>10829 Berlin<br/><br/>Kontakt<br/>LinkedIn
                                </p>
                            </div>
                        </div>
                        <div class="col-3">
                            <p>
                                <strong>Über inno2consult</strong>
                            </p>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-about-menu', 'container_class' => 'i2g-footer-menu-wrap' ) ); ?>
                        </div>
                        <div class="col-3">
                            <p>
                                <strong>Branchen</strong>
                            </p>
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-sector', 'container_class' => 'i2g-footer-menu-wrap' ) ); ?>
                        </div>
                        <div class="col-3">
                            <p>
                                <strong>Lösungen</strong>
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
                            <p>© 2015–2025 inno2grid GmbH. Alle Rechte vorbehalten.</p>
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


