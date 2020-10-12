<?php $portfolio = get_page_by_title('portfolio'); ?>

<?php if(have_rows('item_portfolio', $portfolio)): while(have_rows('item_portfolio', $portfolio)) : the_row(); ?>
<ul class="portfolio_lista">
        <li class="grid-8"><img src="<?php the_sub_field('portfolio_img01', $portfolio); ?>" alt="<?php the_sub_field('portfolio_img_description01', $portfolio); ?>"></li>
        <li class="grid-8"><img src="<?php the_sub_field('portfolio_img02', $portfolio); ?>" alt="<?php the_sub_field('portfolio_img_description02', $portfolio); ?>">"></li>
        <li class="grid-16"><img src="<?php the_sub_field('portfolio_img03', $portfolio); ?>" alt="<?php the_sub_field('portfolio_img_description03', $portfolio); ?>">"></li>
</ul>
<?php endwhile; else : endif; ?>


<?php if (!is_page('portfolio')) { ?>

<?php } ?>