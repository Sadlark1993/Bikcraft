<!--Formulario-->
<?php $contato = get_page_by_title('Contato'); ?>


<section class="orcamento">
    <div class="container">
      <h2 class="subtitulo">Orçamento</h2>
      <form id="form_orcamento" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar-sendgrid.php" class="grid-8 formphp">
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
        <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
      </form>
      <div class="grid-8 dados">
        <h3>Dados</h3>
        <span><?php the_field('telefone', $contato) ?></span>
        <span class="ultimo"><?php the_field('email', $contato) ?></span>
        <h3>Monte sua Bikcraft</h3>
        <ul>
          <li>- Cores</li>
          <li>- Estilo</li>
          <li>- Acessórios</li>
          <li>- Medidas</li>
          <li>- Outros</li>
        </ul>

      </div>
    </div>
  </section>