<?php 
// Template Name: Portfolio
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- INTRO -->
    <?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <!-- CITAÇÃO -->
    <section data-anime="1600" class="container fadeInDown rslides_portfolio" data-slide="quote">
        
            <?php if(have_rows('quote_portfolio')): while(have_rows('quote_portfolio')) : the_row(); ?>
                <blockquote class="quote-portf">
                    <?php the_sub_field('quote_portfolio'); ?>
                    <cite><?php the_sub_field('name_quote'); ?></cite>
                </blockquote>
            <?php endwhile; else : endif; ?>
        
    </section>

    <!-- PORTFÓLIO -->
    <section data-anime="2000" class="portfolio fadeInDown" >
        <div class="container" data-slide="portfolio">
            <?php include(TEMPLATEPATH . "/inc/client-portfolio.php"); ?>
        </div>
    </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>