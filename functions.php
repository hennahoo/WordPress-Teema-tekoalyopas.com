<?php
/**
 * AI-Tietoportaali Teeman toiminnot ja määritykset
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AI_Tietoportaali_Teema
 */

if ( ! defined( 'AI_TIETOPORTAALI_TEEMA_VERSION' ) ) {
    // Korvaa tämä teeman todellisella versiolla myöhemmin, jos julkaiset sen.
	define( 'AI_TIETOPORTAALI_TEEMA_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ai_tietoportaali_teema_setup' ) ) :
    /**
     * Asettaa teeman oletusarvot ja rekisteröi tuen eri WordPress-ominaisuuksille.
     *
     * Huomaa, että tämä funktio on koukutettu 'after_setup_theme' -koukkuun,
     * joka ajetaan ennen init-koukkua. Init-koukku on liian myöhäistä joillekin
     * ominaisuuksille, kuten teeman tuen ilmoittamiselle.
     */
    function ai_tietoportaali_teema_setup() {
        /*
         * Tee teemasta käännösvalmis.
         * Käännökset voidaan sijoittaa /languages/ -kansioon.
         * Jos haluat jakaa teemasi, käytä find and replace -toimintoa
         * vaihtaaksesi 'ai-tietoportaali-teema' teemasi "slugiin" kaikissa kommenteissa.
         */
        load_theme_textdomain( 'ai-tietoportaali-teema', get_template_directory() . '/languages' );

        // Lisää oletusarvoiset RSS-syötelinkit head-osioon.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Anna WordPressin hallita dokumentin title-tagia.
         * Lisäämällä teeman tuen, ilmoitamme WordPressille, että
         * emme käsittele <title>-tagia itse head-osiossa.
         */
        add_theme_support( 'title-tag' );

        /*
         * Salli tuki Post Thumbnails (esillä olevat kuvat) -ominaisuudelle postauksissa ja sivuilla.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // Tämä teema käyttää wp_nav_menu() -funktiota yhdessä sijainnissa.
        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary Menu', 'ai-tietoportaali-teema' ), // Päävalikko
            )
        );

        /*
         * Vaihda oletusarvoinen ydin-markup hakulomakkeelle, kommenttilomakkeelle ja kommenteille
         * käyttämään HTML5-muotoa.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Aseta sisällön leveys (vaikuttaa esim. oletuskuvien ja upotusten kokoon).
        // Tätä arvoa voi säätää teeman ulkoasun mukaan.
        $GLOBALS['content_width'] = apply_filters( 'ai_tietoportaali_teema_content_width', 640 );


        // Lisää tuki valikoiville päivityksille widgeteille Customizerissa.
        add_theme_support( 'customize-selective-refresh-widgets' );

    }
endif;
add_action( 'after_setup_theme', 'ai_tietoportaali_teema_setup' );


/**
 * Rekisteröi skriptit ja tyylit.
 */
function ai_tietoportaali_teema_scripts() {
    // Tyylit
    wp_enqueue_style( 'ai-tietoportaali-teema-style', get_stylesheet_uri(), array(), AI_TIETOPORTAALI_TEEMA_VERSION );
    wp_enqueue_style( 'ai-tietoportaali-teema-google-fonts', 'https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;700&display=swap', array(), null );

    // Hamburger-valikon JS
    wp_enqueue_script(
        'ai-menu-toggle',
        get_template_directory_uri() . '/script.js',
        array(), // riippuvuudet (esim. jQuery)
        null,
        true // ladataan footerissa
    );

    // Kommenttien vastaus
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'ai_tietoportaali_teema_scripts' );




// Tähän voi myöhemmin lisätä muita teemakohtaisia toimintoja,
// kuten widget-alueiden rekisteröinti, omien kuvakokojen määrittely jne.








?>




