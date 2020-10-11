<?php 
    // Template Name: Single Produtos
    get_header(); 
?>

<style type="text/css">
    .produto_item {
    padding-top: 140px;
    }
</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- PRODUTOS PASSEIO -->
    <section data-anime="400" class="container produto_item fadeInDown">
        <div class="grid-11">
            <img src="<?php the_field('main_picture'); ?>" alt="Bikcraft <?php the_title(); ?>">
            <h2><?php the_title(); ?></h2>
        </div>

        <div class="grid-5 produto_icone">
            <img src="<?php the_field('main_icon'); ?>" alt="Icone <?php the_title(); ?>">
        </div>

        <div class="grid-8">
            <img src="<?php the_field('picture_product'); ?>" alt="Bikcraft <?php the_title(); ?>">
        </div>

        <div class="grid-8 produto_info">
            <?php the_content(); ?>
        </div>

    </section>

    <!-- FORMULARIO DO ORÇAMENTO  -->
    <?php include(TEMPLATEPATH . "/inc/produto-orcamento.php"); ?>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>