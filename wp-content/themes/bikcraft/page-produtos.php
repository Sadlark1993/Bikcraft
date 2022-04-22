<?php
// Template Name: Produtos
?>

<!--O calculo para definir o tamanho do grid eh = (container/totalDeColunas X nDeColunasDoGrid) - Gutter -->
  <?php get_header(); ?>

  <!-- Nao vejo motivo disso: -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php 
  // o '.' funciona como um '+', para somar duas strings.
  include(TEMPLATEPATH . '/inc/introducao.php'); 
  ?>

  <!--Prudutos - lista-->

<!--Loop de wp_query que percorre todos os custom post types, buscando todos os seus valores.-->  
<?php
	$args = array (
		'post_type' => 'produtos',
		'order'   => 'ASC'
	);
	$the_query = new WP_Query ( $args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
<section data-anime="1200" class="container lista_produtos fadeInDown">
  <a href="<?php the_permalink(); ?>">
    <div class="grid-10 bloco1">
      <img src="<?php the_field('foto_principal'); ?>" alt="Bicicleta <?php the_title(); ?>">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="grid-6 bloco2">
      <img src="<?php the_field('icone'); ?>" alt="Bicicleta <?php the_title(); ?>">
    </div>
  </a>
</section>

<?php endwhile; else: endif; ?>

<!--Reset o Loop-->
<?php wp_reset_query(); wp_reset_postdata(); ?>

<?php include(TEMPLATEPATH . '/inc/formulario.php');?>
<?php endwhile; endif?>


<?php get_footer();?>
