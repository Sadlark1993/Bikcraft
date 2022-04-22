<!--inicio redes sociais-->

<?php $contato = get_page_by_title('Contato'); ?>


<ul>
    <?php if(have_rows('redes_sociais', $contato)): while(have_rows('redes_sociais', $contato)): the_row();?>
    <li><a href="<?php the_sub_field('link_social', $contato); ?>" 
        target="_blank"><img src="<?php the_sub_field('imagem_social', $contato); ?>" 
        alt="<?php the_sub_field('nome_social', $contato); ?>"></a></li>
    <?php endwhile; endif;?>
</ul>

<!--fim redes sociais-->