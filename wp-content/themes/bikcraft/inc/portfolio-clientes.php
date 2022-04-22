
<!-- portfolio clientes-->
<?php $portfolio = get_page_by_title('Portfolio'); ?>

<div class = "container"  data-slide="portfolio">
    <?php if(have_rows('slides_portfolio', $portfolio)): while(have_rows('slides_portfolio', $portfolio)): the_row()?>

        <ul class="portfolio_lista" >
            <li class="grid-8"><img src="<?php the_sub_field('imagem1_portfolio', $portfolio);?>" alt="<?php the_sub_field('desc_imagem1_portfolio', $portfolio);?>"></li>
            <li class="grid-8"><img src="<?php the_sub_field('imagem2_portfolio', $portfolio);?>" alt="<?php the_sub_field('desc_imagem2_portfolio', $portfolio);?>"></li>
            <li class="grid-16"><img src="<?php the_sub_field('imagem3_portfolio', $portfolio);?>" alt="<?php the_sub_field('desc_imagem3_portfolio', $portfolio);?>"></li>
        </ul>

<?php endwhile; else: endif; ?>
</div>
<?php if(!is_page('Portfolio')){ ?>
    <div class="call">
        <p><?php the_field('chamada_portfolio', $portfolio); ?></p>
        <a href="/bikcraft/portfolio" class="btn">Portfólio</a>
    </div>
<?php } ?>

<!--fim portfolio clientes-->