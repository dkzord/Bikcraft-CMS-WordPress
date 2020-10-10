<?php
    // Template Name: Home
    get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Section -->
    <section class="intro">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown"><?php the_field('intro_title'); ?></h1>
            <blockquote data-anime="800" class="fadeInDown quote-externo">
                <p><?php the_field('intro_quote'); ?></p>
                <cite><?php the_field('cite_quote'); ?></cite>
            </blockquote>
            <a href="/produtos/" data-anime="1200" class="btn">Orçamento</a>
        </div>
    </section>

    <!-- Produtos -->
    <section data-anime="1600" class="container produtos fadeInDown">
        <h2 class="subtitulo">Produtos</h2>

        <ul class="produtos_lista">

            <li class="grid-1-3">
                <div class="produtos_icones">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produto/passeio.svg" alt="Bikcraft passeio">
                </div>
                <h3>Passeio</h3>
                <p>Ainda assim, existme dúvidas a respeito de como a necessidade de renovação.</p>
            </li>

            <li class="grid-1-3">
                <div class="produtos_icones">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produto/esporte.svg" alt="Bikcraft passeio">
                </div>
                <h3>Esporte</h3>
                <p>Ainda assim, existme dúvidas a respeito de como a necessidade de renovação.</p>
            </li>

            <li class="grid-1-3">
                <div class="produtos_icones">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/produto/retro.svg" alt="Bikcraft passeio">
                </div>
                <h3>Retrô</h3>
                <p>Ainda assim, existme dúvidas a respeito de como a necessidade de renovação.</p>
            </li>

        </ul>

        <div class="call-to-action">
            <p><?php the_field('call_products'); ?></p>
            <a href="/produtos/" class="btn btn-preto">Produtos</a>
        </div>

    </section>


    <!-- PORTFÓLIO -->

    <section data-anime="2000" class="portfolio fadeInDown">
        <div class="container">
            <h2 class="subtitulo">Portfólio</h2>
            <?php include(TEMPLATEPATH . "/inc/client-portfolio.php"); ?>
        </div>
    </section>

    <!-- QUALIDADE -->
    <?php include(TEMPLATEPATH . "/inc/quality.php"); ?>


<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
