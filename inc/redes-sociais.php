<?php $contatos = get_page_by_title('contatos'); ?>

<ul>
    <?php if(have_rows('redes-sociais', $contatos)): while(have_rows('redes-sociais', $contatos)) : the_row(); ?>
    <li><a href="<?php the_sub_field('link_social'); ?>" target="_blank"><img src="<?php the_sub_field('img_social'); ?>" alt="<?php the_sub_field('name_social'); ?>"></a></li>
    <?php endwhile; else : endif; ?>
</ul>
