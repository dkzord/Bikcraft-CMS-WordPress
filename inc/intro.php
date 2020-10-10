<style type="text/css">
    .intro-interna {
        background: #000 url(<?php the_field('background_interno'); ?>) no-repeat center;
        background-size: cover;
    }
</style>


<!-- INTRO -->
    <section class="intro-interna">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown"><?php the_title(); ?></h1>
            <p data-anime="800"><?php the_field('subtitulo'); ?></p>
        </div>
    </section>