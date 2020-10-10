<?php 
// Template Name: Portfolio
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- INTRO -->
    <?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <!-- CITAÇÃO -->
    <section class="container">
        <ul class="rslides">
            <?php if(have_rows('quote_portfolio')): while(have_rows('quote_portfolio')) : the_row(); ?>
            <li>
                <blockquote class="quote-portfolio">
                    <?php the_sub_field('quote'); ?>
                    <cite><?php the_sub_field('name_quote'); ?></cite>
                </blockquote>
            </li>
            <?php endwhile; else : endif; ?>

        </ul>
    </section>

    <!-- PORTFÓLIO -->
    <section class="portfolio">
        <div class="container">
            <?php include(TEMPLATEPATH . "/inc/client-portfolio.php"); ?>
        </div>
    </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>