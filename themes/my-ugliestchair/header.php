<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('body'); ?>>
<header>
    <div class="header-container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>"><?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } 
                else {
                    echo '<img src="./assets/images/LogoUglyChair.png" alt="Logo">';
                }
                ?>
            </a>
        </div>
        <nav class="navbar">
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
</header>

</div>

