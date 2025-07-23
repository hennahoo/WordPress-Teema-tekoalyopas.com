<?php
/**
 * Pääsivupohja (index.php) teemalle.
 *
 * Tämä on WordPress-teeman yleisin templaattitiedosto, ja sitä käytetään näyttämään
 * sivu, kun tarkempaa templaattia ei löydy (esim. etusivu, arkistosivut, yksittäiset postaukset, jos front-page.php, home.php, archive.php tai single.php puuttuvat).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AI_Tietoportaali_Teema
 */

get_header(); // Hakee header.php:n sisällön
?>

    <main id="primary" class="site-main"> <?php // primary on yleinen ID pääsisällölle ?>

        <?php if ( is_front_page() ) : // Näytetään vain etusivulla tämä hero-osio ?>
        <section class="hero">
            <div class="container">
                <h2>Avaa Ovi Tekoälyn Maailmaan.</h2>
                <center>
                
                <p>Olitpa vasta-alkaja tai kokenut konkari, täältä löydät kattavasti tietoa tekoälyn perusteista, uusimmista työkaluista ja mullistavista sovelluksista.</p>
                
                </center>
                <!-- <a href="#" class="cta-button">Aloita Tutustuminen</a> -->
            </div>
        </section>





        <section class="content-area">
            <div class="container">
                <h3 class="section-title">Tutki Tekoälyn Ulottuvuuksia</h3>
                
                
                                <center>    
                <p>           
                   Tervetuloa tutustumaan sivustoon nimeltä Tekoälyopas, jonka tehtävänä on avata ovi tekoälyn maailmaan tavalla, joka yhdistää akateemisen tarkan luokittelun ja käytännönläheisen innostuksen – tämä portaali on suunniteltu niin, että se palvelee yhtä lailla perusteiden opettelijaa kuin jo konemallien kanssa työskennellyttä konkaria, tarjoten johdonmukaisesti jäsenneltyjä artikkeleita, opastettuja videoita, interaktiivisia demoja ja päivitettyjä työkaluvinkkejä juuri oikeassa suhteessa teoriataustaa ja käytännön sovelluksia.  </p>  
                   
                 <p>    
                   Tekoälyoppaan runsaasta sisällöstä löydät selkeät johdannot keskeisiin käsitteisiin, kuten koneoppimisen perusteisiin ja neuroverkkojen arkkitehtuureihin, mutta myös syväanalyysit viimeisimmistä tutkimusjulkaisuista ja modulaaristen kehitysalustojen esittelyt, joiden ansiosta opit ymmärtämään sekä klassisen valvotun oppimisen algoritmien toimintaperiaatteet että uudet self-supervised- ja generatiivisen mallintamisen menetelmät, samalla kun sivusto neuvoo, miten nämä menetelmät viedään askel askeleelta tuotantoympäristöön.
                </p>        </center>
                
                
                <div class="grid-container">
                    
                    <a href="https://tekoalyopas.com/ai-perusteet/" class="grid-item">
                        <h4>AI Perusteet</h4>
                        <p>Mitä tekoäly todella tarkoittaa? Tutustu peruskäsitteisiin, historiaan ja erilaisiin AI-tyyppeihin selkokielellä.</p>
                        <span class="learn-more">Opi perusteet &rarr;</span>
                    </a>

                    <a href="https://tekoalyopas.com/kaytannon-tyokalut/" class="grid-item">
                        <h4>Käytännön Työkalut</h4>
                        <p>Löydä parhaat tekoälytyökalut ja -alustat niin koodaamiseen, sisällöntuotantoon kuin data-analyysiin. Vinkkejä aloittelijoille ja ammattilaisille.</p>
                        <span class="learn-more">Selaa työkaluja &rarr;</span>
                    </a>

                    <a href="https://tekoalyopas.com/ai-sovellukset-arjessa/" class="grid-item">
                        <h4>AI Sovellukset Arjessa</h4>
                        <p>Miten tekoälyä hyödynnetään jo nyt eri aloilla? Esimerkkejä terveydenhuollosta, viihteestä, liikenteestä ja monelta muulta sektorilta.</p>
                        <span class="learn-more">Katso sovellusesimerkkejä &rarr;</span>
                    </a>

                    <a href="https://tekoalyopas.com/syvemmalle-tekoalyyn/" class="grid-item">
                        <h4>Syvemmälle Tekoälyyn</h4>
                        <p>Kokeneemmille käyttäjille: Artikkeleita koneoppimisen malleista, neuraverkoista, NLP:stä ja tekoälyn eettisistä kysymyksistä.</p>
                         <span class="learn-more">Lue lisää &rarr;</span>
                    </a>

                    <a href="https://tekoalyopas.com/ain-tulevaisuus-trendit/" class="grid-item">
                        <h4>AI:n Tulevaisuus & Trendit</h4>
                        <p>Mitä seuraavaksi? Pysy ajan tasalla tekoälyn uusimmista kehityssuunnista, innovaatioista ja tulevaisuuden visioista.</p>
                        <span class="learn-more">Tutustu trendeihin &rarr;</span>
                    </a>

                    <a href="https://tekoalyopas.com/puhu-synnan-kanssa/" class="grid-item">
                        <h4>Puhu Synnan kanssa</h4>
                        <p>Synna on kehittynyt superälyprototyyppi. Täällä pääset keskustelemaan sen kanssa englanniksi. Avaa mikrofonisi ja juttele! </p>
                        <span class="learn-more">Puhu Synnan kanssa &rarr;</span>
                    </a>

                </div>

               

                
            </div>
        </section>
        <?php else : // Muilla sivuilla (esim. blogiarkisto, yksittäiset postaukset) näytetään WordPressin The Loop ?>
            <div class="container content-area">
            <?php
            if ( have_posts() ) : // Aloitetaan The Loop, jos postauksia löytyy

                /* Aloita Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                    * Sisällytä postauksen sisältö käyttäen templaattiosaa.
                    */
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?>> <?php // Käytetään grid-item tyyliä myös posteille ?>
                        <header class="entry-header">
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php
                            the_content(
                                sprintf(
                                    wp_kses(
                                        /* kääntäjille: %s: Postauksen nimi näytönlukijoille. */
                                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ai-tietoportaali-teema' ),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    get_the_title()
                                )
                            );

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ai-tietoportaali-teema' ),
                                    'after'  => '</div>',
                                )
                            );
                            ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-<?php the_ID(); ?> -->
                    <?php

                endwhile; // Loopin loppu

                the_posts_navigation(); // Navigaatio vanhempiin/uudempiin postauksiin

            else : // Jos postauksia ei löydy

                ?>
                <section class="no-results not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'ai-tietoportaali-teema' ); ?></h1>
                    </header><!-- .page-header -->
                    <div class="page-content">
                        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ai-tietoportaali-teema' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .page-content -->
                </section><!-- .no-results -->
                <?php

            endif;
            ?>
            </div><!-- .container .content-area -->
        <?php endif; // is_front_page() loppu ?>
    </main><!-- #primary -->

<?php
get_footer(); // Hakee footer.php:n sisällön
