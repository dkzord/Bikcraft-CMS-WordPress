<?php 
    // Template Name: Contatos
    get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Intro -->
    <?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <!-- FORMULARIO DO ORÇAMENTO  -->
    <section data-anime="1600" class="container contatos fadeInDown">

                <form id="form_orcamento" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="contatos_form formphp grid-8">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>

                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone">

                    <!-- PARA EVITAR ALGUNS TIPOS DE SPAM -->
                    <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                    <input type="text" class="nao-aparece" name="leaveblank">

                    <label class="nao-aparece">Se você não é um robô, não mude esse campo</label>
                    <input type="text" class="nao-aparece" name="dontchange" value="http://">
                    <!-- FIM -->

                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10" required></textarea>

                    <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
                </form>

            <div class="dados_contatos grid-8">
                <h3>Dados</h3>
                <span><?php the_field('phone'); ?></span>
                <span><?php the_field('email'); ?></span>
                <span><?php the_field('address1'); ?></span>
                <span><?php the_field('address2'); ?></span>
                
                <div class="contatos_redes">
                    <h3>Redes Sociais</h3>
                    <?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
                </div>

            </div>
    </section>

    <!-- MAPA -->
    <div data-anime="2000" class="container contato_mapa fadeInDown">
        <a href="<?php the_field('link_map'); ?>" target="_blank" class="grid-16"><img src="<?php the_field('img_map'); ?>" alt="<?php the_field('quote_map'); ?>"></a>
    </div>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>