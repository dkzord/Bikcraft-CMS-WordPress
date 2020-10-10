<?php 
    // Template Name: Sobre
    get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- INTRO -->
<?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <!-- HISTORIA, MISSÃO E VISÃO -->
    <section data-anime="1600" class="missao_sobre container fadeInDown">

            <div class="grid-10">
                <h2 class="subtitulo-interno">História, Missão e Visão</h2>
                <p>Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.</p>
                <p>Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.</p>
            </div>

            <div class="grid-6">
                <h2 class="subtitulo-interno">Valores</h2>
                <ul>
                    <li>- Qualidade no processo com</li>
                    <li>- Foco no cliente sem perde a</li>
                    <li>- Diversão, preservando  a</li>
                    <li>- Natureza com sustentabilidade</li>
                </ul>
            </div>

            <div class="grid-16 foto-equipe">
                <img src="img/equipe-bikcraft.jpg" alt="Equipe Bikcraft">
            </div>

    </section>

    <!-- QUALIDADE -->
    <?php include(TEMPLATEPATH . "/inc/quality.php"); ?>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>