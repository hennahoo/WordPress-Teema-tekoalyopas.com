<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ai-tietoportaali-teema' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">

            <nav id="site-navigation" class="main-navigation">


                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger-icon"></span>
                    <?php esc_html_e('AI', 'ai-tietoportaali-teema'); ?>
                </button>


                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb'    => false,
                        'depth'          => 1
                    ));
                } else {
                    echo '<ul id="primary-menu">';
                    echo '<li><a href="https://tekoalyopas.com/">Etusivu</a></li>';
                    echo '<li><a href="https://tekoalyopas.com/mita-on-ai/">Mitä on AI?</a></li>';
                    echo '<li><a href="https://tekoalyopas.com/ai-perusteet/">AI Perusteet</a></li>';
                    echo '<li><a href="https://tekoalyopas.com/kaytannon-tyokalut/">Käytännön Työkalut</a></li>';
                    echo '<li><a href="https://tekoalyopas.com/ai-sovellukset-arjessa/">AI Sovellukset Arjessa</a></li>';
                    echo '<li><a href="https://tekoalyopas.com/syvemmalle-tekoalyyn/">Syvemmälle Tekoälyyn</a></li>';
                    echo '<li><a href="https://tekoalyopas.com/ain-tulevaisuus-trendit/">AI:n Tulevaisuus & Trendit</a></li>';
                    echo '<li><a href="https://tekoalyopas.com/puhu-synnan-kanssa/">Puhu Synnan kanssa</a></li>';
                    echo '</ul>';
                }
                ?>
            </nav>

        </div><!-- .container -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">