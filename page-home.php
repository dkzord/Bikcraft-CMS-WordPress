<?php
    // Template Name: Home
    get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php 
    $imagem_id = get_field('background_home');
    $background_large = wp_get_attachment_image_src($imagem_id, 'large');
    $background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
?>

    <!-- Responsivo para o WordPress - Editavel IMG -->
<style type="text/css">
    .intro{
        background: #000 url(<?php echo $background_large[0] ?>) no-repeat center;
        background-size: cover;
    }

    @media only screen and (max-width: 787px){
        .intro {
        background: #000 url(<?php echo $background_medium[0] ?>) no-repeat center;
        background-size: cover;
        }
    }

</style>

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
            <?php
                $args = array (
                    'post_type' => 'produtos'
                );
                $the_query = new WP_Query ( $args );
            ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <li class="grid-1-3">
                <a href="<?php the_permalink(); ?>">
                    <div class="produtos_icones">
                        <img src="<?php the_field('main_icon'); ?>" alt="Bikcraft passeio">
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_field('resumo_produto'); ?></p>
                </a>
            </li>

            <?php endwhile; else: endif; ?>
            <?php wp_reset_query(); wp_reset_postdata(); ?>
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
