    <!-- QUALIDADE -->
<?php $sobre = get_page_by_title('sobre'); ?>
<section data-anime="2400" class="container qualidade fadeInDown">
    <h2 class="subtitulo"><?php the_field('quality_title', $sobre); ?></h2>
    <img src="<?php the_field('brand_bikcraft', $sobre); ?>" alt="">
    <ul class="qualidade_lista">
        <?php if(have_rows('item_quality', $sobre)): while(have_rows('item_quality', $sobre)) : the_row(); ?>
        <li class="grid-1-3">
            <h3><?php the_sub_field('item_title_quality', $sobre); ?></h3>
            <p><?php the_sub_field('description_item_quality', $sobre); ?></p>
        </li>
        <?php endwhile; else : endif; ?>
    </ul>

    <?php if (!is_page('sobre')) { ?>
    <div class="call-to-action">
        <p><?php the_field('call_about', $sobre); ?></p>
        <a href="<?php bloginfo('url'); ?>/sobre/" class="btn btn-preto">sobre</a>
    </div>
    <?php } ?>
</section>