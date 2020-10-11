<?php 
    // Template Name: Produtos
    get_header(); 
?>

<style type="text/css">
    .intro-interna {
        margin-bottom: 15px;
    }
    .produto_item {
    padding-top: 15px;
    }
</style>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- INTRO -->
    <?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <?php
        $args = array (
            'post_type' => 'produtos'
        );
        $the_query = new WP_Query ( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <!-- PRODUTOS PASSEIO -->
    <section data-anime="800" class="container produto_item fadeInDown">
        <a href="<?php the_permalink(); ?>">
            <div class="grid-11">
                <img src="<?php the_field('main_picture'); ?>" alt="Bikcraft <?php the_title(); ?>">
                <h2><?php the_title(); ?></h2>
            </div>

            <div class="grid-5 produto_icone">
                <img src="<?php the_field('main_icon'); ?>" alt="Icone <?php the_title(); ?>">
            </div>
        </a>
    </section>

    <?php endwhile; else: endif; ?>
    <?php wp_reset_query(); wp_reset_postdata(); ?>

    <!-- FORMULARIO DO ORÇAMENTO  -->
    <?php include(TEMPLATEPATH . "/inc/produto-orcamento.php"); ?>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>