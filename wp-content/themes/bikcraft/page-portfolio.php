<?php
// Template Name: Portfolio
?>

<!--O calculo para definir o tamanho do grid eh = (container/totalDeColunas X nDeColunasDoGrid) - Gutter -->

  <?php get_header(); ?>

  <!-- Nao vejo motivo disso: -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Portfolio - Introducao -->

  <?php 
  // o '.' funciona como um '+', para somar duas strings.
  include(TEMPLATEPATH . '/inc/introducao.php'); 
  ?>

  <!--Secao Portfolio-->
  <section class="container fadeInDown" data-anime="1200" data-slide="quote">

    <?php if(have_rows('frases_clientes')): while(have_rows('frases_clientes')): the_row() ?>
    <blockquote class="quote-clientes">
      <?php the_sub_field('citacao_cliente'); ?>
      <cite><?php the_sub_field('nome_cliente') ?></cite>
    </blockquote>
    <?php endwhile; endif; ?>

  </section>

  <section class="portfolio">
    <div class="container" >
      <?php include(TEMPLATEPATH . '/inc/portfolio-clientes.php'); ?>
    </div>
  </section>
  <?php endwhile; endif?>

  <?php get_footer();?>
