<?php
// Template Name: Contato
?>


<!--O calculo para definir o tamanho do grid eh = (container/totalDeColunas X nDeColunasDoGrid) - Gutter -->

  <?php get_header(); ?>

  <!-- Nao vejo motivo disso: -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Produtos - Introducao -->

  <?php 
  // o '.' funciona como um '+', para somar duas strings.
  include(TEMPLATEPATH . '/inc/introducao.php'); 
  ?>

  <!--Container Contato-->

  <section data-anime="1200" class="container cont fadeInDown">
    <form id="form_contato" method="POST" action="enviar-sendgrid.php" class="grid-8 formphp">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" required>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="telefone">Telefone</label>
      <input type="text" id="telefone" name="telefone">
      <label class="nao-aparece">Se você não é um robô, deixe me branco</label>
      <input type="text" class="nao-aparece" name="leaveblank">
      <label class="nao-aparece">Se você não é um robô, não mude esse campo</label>
      <input class="nao-aparece" name="dontchange" value="http://">
      <label for="mensagem">Mensagem</label>
      <textarea id="mensagem" name="mensagem" required></textarea>
      <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
    </form>
    <div class="grid-8 dados">
      <h3>Dados</h3>
      <span><?php the_field('telefone') ?></span>
      <span class="ultimo"><?php the_field('email') ?></span>
      <span><?php the_field('endereco1') ?></span>
      <span class="ultimo"><?php the_field('endereco2') ?></span>
      <h3>Redes Sociais</h3>
      <div class="footer_redes">
      <?php include(TEMPLATEPATH . '/inc/redes-sociais.php'); ?>
      </div>
    </div>
  </section>
  <?php endwhile; endif?>

  <?php get_footer(); ?>