 </div><!-- #content --> <?php // Pääsisältöalueen loppu ?>

    <footer id="colophon" class="site-footer"> <?php // colophon on yleinen ID alatunnisteelle ?>
        <div class="container">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
                | Kaikki oikeudet pidätetään.
                | <a href="mailto:info@tekoalyopas.com">info@tekoalyopas.com</a>


            </div><!-- .site-info -->
        </div><!-- .container -->
    </footer><!-- #colophon -->
</div><!-- #page --> <?php // Yleisen "wrapperin" loppu ?>

<?php wp_footer(); // ÄLÄ POISTA! WordPressin koukku, lisää skriptit sivun loppuun ?>
</body>
</html>


<!--
//                <?php
                    /* kääntäjille: 1: Teeman nimi, 2: Teeman tekijän linkki. */
//                    printf( esc_html__( 'Theme: %1$s by %2$s.', 'ai-tietoportaali-teema' ), 'AI-Tietoportaali Teema', '<a href="#">Pilvialy.online</a>' );     
//                ?>

-->