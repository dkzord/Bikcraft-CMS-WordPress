<?php 
    // Template Name: Portfolio
    get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- INTRO -->
    <?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <!-- CITAÇÃO -->
    <section data-anime="1600" class="container fadeInDown" data-slide="quote">

        <blockquote class="quote-portfolio">
            <p>"No mundo atual a continua expansão de nossa atividade cumpri um papel essencial na formulação da gestão inovadora a qual fazemos parte."</p>
            <cite>Barbara Rocks</cite>
        </blockquote>

        <blockquote class="quote-portfolio">
            <p>“Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me traiu e está sempre a minha disposição.”</p>
            <cite>Jhony Rato</cite>
        </blockquote>

        <blockquote class="quote-portfolio">
            <p>“Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a velocidade transcendental. Nunca vida nada igual.”</p>
            <cite>Zoro Dojko</cite>
        </blockquote>

        <blockquote class="quote-portfolio">
            <p>“Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo.”</p>
            <cite>Lyfftaro D. Golden</cite>
        </blockquote>

    </section>

    <!-- PORTFÓLIO -->
    <section data-anime="2000"  class="portfolio fadeInDown">
        
        <div class="container" data-slide="portfolio" >
            <?php include(TEMPLATEPATH . "/inc/client-portfolio.php"); ?>
        </div>
    </section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>