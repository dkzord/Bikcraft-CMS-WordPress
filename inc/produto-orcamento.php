<?php $contatos = get_page_by_title('contatos'); ?>
<?php $produtos = get_page_by_title('produtos'); ?>
    <!-- FORMULARIO DO ORÇAMENTO  -->
    <section data-anime="1200" class="orcamento fadeInDown">
        <div class="container">

                <h2 class="subtitulo">orçamento</h2>

                <form id="form_orcamento" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="form formphp grid-8">
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

                    <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
                </form>

                <div class="dados_orcamento grid-8">
                    <h3>Dados</h3>
                    <span><?php the_field('phone', $contatos); ?></span>
                    <span><?php the_field('email', $contatos); ?></span>

                    <h3>Monte a sua Bikcraft</h3>
                    <p>Escolha as especificações</p>
                    <?php the_field('budget_item', $produtos); ?>
                </div>
        </div>
    </section>