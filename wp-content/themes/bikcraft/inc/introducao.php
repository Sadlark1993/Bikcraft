<style type="text/css"> 
    .introducao_interna{
        background: url("<?php the_field('background_interno'); ?>") no-repeat center;
        background-size: cover;
    }
</style>


<!-- introducao das paginas internas -->
<section class="introducao_interna">
    <div class="container">
        <h1 data-anime="400" class="fadeInDown"><?php the_title(); ?></h1>
        <p data-anime="800" class="fadeInDown"><?php the_field('subtitulo_interno') ?></p>
    </div>
</section>