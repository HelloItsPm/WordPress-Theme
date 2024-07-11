<?php wp_footer(); ?>

<footer class="footer">

    <div class="footer-container">
        <div class="footer-navigation">
            <p>Navigation</p>
            <nav class="navbar-footer">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'menu_class'     => 'nav-menu',
                            'container'      => 'ul',
                        )
                    );
                ?>
            </nav>
        </div>
        <div class="footer-contact">
            <p>Contact</p>
            <div class="contact-info">
            <?php if (get_field('home__footer_phone', 'option')): ?>
                        <?php echo wp_kses_post(get_field('home__footer_phone', 'option')); ?>
                    <?php endif; ?>
                    <div class = "footer-adress-container">
                        <?php if (get_field('home__footer_adress', 'option')): ?>
                            <?php echo wp_kses_post(get_field('home__footer_adress', 'option')); ?>
                        <?php endif; ?>
                        <?php if (get_field('_home__footer_adressplus', 'option')): ?>
                            <?php echo wp_kses_post(get_field('home__footer_adressplus', 'option')); ?>
                        <?php endif; ?>
                        <div class = "footer-town-container">
                            <?php if (get_field('_home__footer_postcode', 'option')): ?>
                                <?php echo wp_kses_post(get_field('home__footer_postcode', 'option')); ?>
                            <?php endif; ?>
                            <?php if (get_field('_home__footer_town', 'option')): ?>
                                <?php echo wp_kses_post(get_field('home__footer_town', 'option')); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (get_field('home__footer_mail', 'option')): ?>
                        <?php echo wp_kses_post(get_field('home__footer_mail', 'option')); ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>

</footer>
</body>
</html>