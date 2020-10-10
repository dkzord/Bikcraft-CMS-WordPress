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
                <?php the_field('story_about'); ?>
            </div>

            <div class="grid-6">
                <h2 class="subtitulo-interno">Valores</h2>
                <?php the_field('story_about_values'); ?>
            </div>

            <div class="grid-16 foto-equipe">
                <img src="<?php the_field('team_img'); ?>" alt="Equipe Bikcraft">
            </div>

    </section>

    <!-- QUALIDADE -->
    <?php include(TEMPLATEPATH . "/inc/quality.php"); ?>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>