<?php 
    // Template Name: Contatos
    get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Intro -->
    <?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <!-- FORMULARIO DO ORÇAMENTO  -->
    <section data-anime="1600" class="container contatos fadeInDown">

                <form id="form_orcamento" method="POST" action="./enviar-sendgrid.php" class="contatos_form formphp grid-8">
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
                <span>(21) 9999-9999</span>
                <span>contato@bikcraft.com</span>
                <span>Rua do Birobiro - Bota Fogo</span>
                <span>Rio de Janeiro - RJ - Brasil</span>
                
                <div class="contatos_redes">
                    <h3>redes sociais</h3>
                    <ul>

                        <li><a href="https://www.facebook.com/" target="_blank"><img src="img/redes-sociais/facebook.svg" alt="facebook"></a></li>
                    
                        <li><a href="https://www.instagram.com/" target="_blank"><img src="img/redes-sociais/instagram.svg" alt="instagram"></a></li>

                        <li><a href="http://twitter.com/" target="_blank"><img src="img/redes-sociais/twitter.svg" alt="twitter"></a></li>
                  
                    </ul>
                </div>

            </div>
    </section>

    <!-- MAPA -->
    <div data-anime="2000" class="container contato_mapa fadeInDown">
        <a href="https://www.google.com" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg" alt="endereço da bikcraft"></a>
    </div>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>