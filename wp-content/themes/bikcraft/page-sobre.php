<?php
// Template Name: Sobre
?>
<!--O calculo para definir o tamanho do grid eh = (container/totalDeColunas X nDeColunasDoGrid) - Gutter -->

<?php get_header(); ?>
<!-- Nao vejo motivo disso: -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Sobre - Introducao -->

  <?php 
  // o '.' funciona como um '+', para somar duas strings.
  include(TEMPLATEPATH . '/inc/introducao.php'); 
  ?>

  <section data-anime="1200" class="sobre_detalhes container fadeInDown">
    <div class="grid-10 historia">
      <h2>História, Visão e Missão</h2>
      <?php the_field('missao'); ?>
    </div>
    <div class="grid-6 valores">
      <h2>Valores</h2>
      <?php the_field('valores');?>
    </div>

    <div class="grid-16 foto-equipe">
      <img src="<?php the_field('foto_equipe'); ?>" alt="Equipe Bikcraft">
    </div>
  </section>

  <?php include(TEMPLATEPATH . '/inc/qualidade.php'); ?>
<?php endwhile; endif?>

<!-- Sobre - Footer-->

<?php get_footer();?>
