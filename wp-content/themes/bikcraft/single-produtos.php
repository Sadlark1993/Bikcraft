<?php
//single produtos
?>

<!--O calculo para definir o tamanho do grid eh = (container/totalDeColunas X nDeColunasDoGrid) - Gutter -->
  <?php get_header(); ?>

  <!-- Nao vejo motivo disso: -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--bloco do produto-->
  <section data-anime="1200" class="container lista_produtos single fadeInDown">
    <div class="grid-10 bloco1">
      <img src="<?php the_field('foto_principal'); ?>" alt="Bicicleta <?php the_title(); ?>">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="grid-6 bloco2">
      <img src="<?php the_field('icone'); ?>" alt="Bicicleta <?php the_title(); ?>">
    </div>
    <div class="grid-8">
      <img src="<?php the_field('foto2'); ?>" alt="Bicicleta <?php the_title(); ?>">
    </div>
    <div class="grid-8 bloco4">
    <?php the_content(); ?>
      <ul>
        <li><?php the_field('qualidade1'); ?></li>
        <li><?php the_field('qualidade2'); ?></li>
        <li><?php the_field('qualidade3'); ?></li>
        <li><?php the_field('qualidade4'); ?></li>
      </ul>
    </div>
  </section>

  <?php include(TEMPLATEPATH . '/inc/formulario.php'); ?>
  <?php endwhile; endif?>


  <?php get_footer();?>
