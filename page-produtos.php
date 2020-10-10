<?php 
    // Template Name: Produtos
    get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- INTRO -->
    <?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

    <!-- PRODUTOS PASSEIO -->
    <section data-anime="1600" class="container produto_item fadeInDown">
        <div class="grid-11">
            <img src="img/produto/bikcraft-passeio-01.jpg" alt="passeio um">
            <h2>Passeio</h2>
        </div>

        <div class="grid-5 produto_icone">
            <img src="img/produto/passeio.svg" alt="passeio dois">
        </div>

        <div class="grid-8">
            <img src="img/produto/bikcraft-passeio-02.jpg" alt="">
        </div>

        <div class="grid-8 produto_info">
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
            <ul>
                <li>Conforto</li>
                <li>velocidade</li>
                <li>design</li>
                <li>versatilidade</li>
            </ul>
        </div>

    </section>

    <!-- PRODUTOS ESPORTE -->
    <section data-anime="2000" class="container produto_item fadeInDown">
        <div class="grid-11">
            <img src="img/produto/bikcraft-esporte-01.jpg" alt="esporte um">
            <h2>esporte</h2>
        </div>

        <div class="grid-5 produto_icone">
            <img src="img/produto/esporte.svg" alt="esporte dois">
        </div>
    
        <div class="grid-8">
            <img src="img/produto/bikcraft-esporte-02.jpg" alt="">
        </div>
    
        <div class="grid-8 produto_info">
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
            <ul>
            <li>Conforto</li>
                <li>velocidade</li>
                <li>design</li>
                <li>versatilidade</li>
            </ul>
        </div>

        </section>

    <!-- PRODUTOS RETRÔ -->
    <section data-anime="2400" class="container produto_item fadeInDown">
        <div class="grid-11">
            <img src="img/produto/bikcraft-retro-01.png" alt="retro um">
            <h2>retrô</h2>
        </div>

        <div class="grid-5 produto_icone">
            <img src="img/produto/retro.svg" alt="retro dois">
        </div>
    
        <div class="grid-8">
            <img src="img/produto/bikcraft-retro-02.jpg" alt="">
        </div>
    
        <div class="grid-8 produto_info">
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
            <ul>
                <li>Conforto</li>
                <li>velocidade</li>
                <li>design</li>
                <li>versatilidade</li>
            </ul>
        </div>

    </section>

    <!-- FORMULARIO DO ORÇAMENTO  -->
    <section data-anime="2800" class="orcamento fadeInDown">
        <div class="container">

                <h2 class="subtitulo">orçamento</h2>


                <form id="form_orcamento" method="POST" action="./enviar-sendgrid.php" class="form formphp grid-8">
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
                <span>(21) 9999-9999</span>
                <span>contato@bikcraft.com</span>

                <h3>Monte a sua Bikcraft</h3>
                <p>Escolha as especificações</p>

                <ul>
                    <li>- Core</li>
                    <li>- Estilos</li>
                    <li>- Acessórios</li>
                    <li>- Medidas</li>
                    <li>- E outros</li>
                </ul>
            </div>
        </div>
    </section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>