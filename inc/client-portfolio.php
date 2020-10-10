<?php $portfolio = get_page_by_title('portfolio'); ?>

<ul class="portfolio_lista rslides_portfolio">
    <?php if(have_rows('item_portfolio', $portfolio)): while(have_rows('item_portfolio', $portfolio)) : the_row(); ?>
    <li>
        <div class="grid-8"><img src="<?php the_sub_field('portfolio_img01', $portfolio); ?>" alt="<?php the_sub_field('portfolio_img_description01', $portfolio); ?>"></div>
        <div class="grid-8"><img src="<?php the_sub_field('portfolio_img02', $portfolio); ?>" alt="<?php the_sub_field('portfolio_img_description02', $portfolio); ?>">"></div>
        <div class="grid-16"><img src="<?php the_sub_field('portfolio_img03', $portfolio); ?>" alt="<?php the_sub_field('portfolio_img_description03', $portfolio); ?>">"></div>
    </li>
    <?php endwhile; else : endif; ?>
</ul>

<?php if (!is_page('portfolio')) { ?>
<div class="call-to-action">
    <p><?php the_field('call_portfolio'); ?></p>
    <a href="/portfolio/" class="btn">portfólio</a>
</div>
<?php } ?>