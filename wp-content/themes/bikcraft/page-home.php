
<?php
// Template Name: Home
?>

<!--O calculo para definir o tamanho do grid eh = (container/totalDeColunas X nDeColunasDoGrid) - Gutter -->

  <!--get header-->
  <?php get_header(); ?>
  <!--fim get header-->

  <!--nao vejo motivo nisso-->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <!--home introducao-->

  <?php 
    //no wordpress colocaremos pra retornar o id da imagem.
    //a funcao get_field() eh igual a the_field(), soh q sem o 'echo'.
    $imagem_id = get_field('background_home');
    $background_large = wp_get_attachment_image_src($imagem_id, 'large');
    $background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
  ?>

  <style type = "text/css">
    .introducao{
      /* A celula 0 do array de 'wp_get_attachment_image_src' retorna a url da imagem, o 1 retorna 
      o width da imagem, o 2 retorna o height da imagem. */
      background:  linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo $background_large[0] ?> ') no-repeat center;
      background-size: cover;
    }
    @media only screen and (max-width: 767px){
      .introducao{
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo $background_medium[0] ?> ') no-repeat center;
        background-size: cover;
      }
    }
  </style>

  <section class="introducao">
    <div class="container">
      <h1 data-anime="400" class="fadeInDown"><?php the_field('titulo_home');?></h1>
      <blockquote data-anime="800" class="quote-externo fadeInDown">
        <p><?php the_field('quote_home'); ?></p>
        <cite><?php the_field('autor_quote_home') ?></cite>
      </blockquote>
      <a data-anime="1200" href="produtos.html" class="btn btn-preto">Orçamento</a>
    </div>
  </section>

  <!-- Home - Produtos-->
  

  <section class="produtos container">
    <h2 class="subtitulo">Produtos</h2>
    <ul class="produtos_lista">

      <!--Loop de wp_query que percorre todos os custom post types, buscando todos os seus valores.-->
      <?php
        $args = array (
          'post_type' => 'produtos',
          'order'   => 'ASC'
        );
        $the_query = new WP_Query ( $args );
      ?>
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <li class="grid-1-3">
        <a href="<?php the_permalink(); ?>">
        <div class="produtos_icone">
          <img src="<?php the_field('icone');?>" alt="Bikcraft <?php the_title(); ?>">
        </div>
        <h3><?php the_title(); ?></h3>
        <p><?php the_field('resumo');?></p>
        </a>
      </li>

      <?php endwhile; else: endif; ?>

    </ul>
    <!--Resetar o loop-->
    <?php wp_reset_query(); wp_reset_postdata(); ?>

    <div class="call">
      <p><?php the_field('chamada_produto'); ?></p>
      <a href="/bikcraft/produtos" class="btn btn-preto">Produtos</a>
    </div>
  </section>

  <!-- Home - Portfolio-->

  <section class="portfolio">
    <div class="container">
      <h2 class="subtitulo"> Portfólio</h2>
    </div>
    <div class="container">
      <?php include(TEMPLATEPATH . '/inc/portfolio-clientes.php'); ?>
    </div>
  </section>

  <?php include(TEMPLATEPATH . '/inc/qualidade.php'); ?>

  <?php endwhile; endif;?>
  <?php get_footer();?>


