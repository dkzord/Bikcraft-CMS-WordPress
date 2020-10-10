<style type="text/css">
    .quebra {
        background: #000 url(../img/bg-footer.jpg) no-repeat center;
        background-size: cover;
    }
</style>   
   
   <!-- QUEBRA ANTES DO FOOTER -->
        <div class="quebra">
        
                <blockquote class="quote-externo container">
                    <p>"O verdadeiro segredo da felicidade é ter um genuíno interesse por todos os detalhes da vida cotidiana"</p>
                    <cite>William Morris</cite>
                </blockquote>
            
        </div>

        <!-- FOOTER -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="grid-8 footer_historia">
                        <h3>Nossa história</h3>
                        <p>É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha. É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando analisa a sua mancha.</p>
                    </div>

                    <div class="grid-4 footer_contatos">
                        <h3>Contato</h3>
                        <ul>
                            <li>- 21 9999-9999</li>
                            <li>- contato@bikcraft.com</li>
                            <li>- Bota Fogo - RJ</li>
                        </ul>
                    </div>
                    
                    <div class="grid-4 footer_redes">
                        <h3>Redes Sociais</h3>
                        <?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
                    </div>

                </div>

            </div>
            
            <!-- Copyright -->
            <div class="copy">
                <div class="container">
                    <p class="grid-16"> &copy;Bikcraft 2020 - Alguns direitos reservadors</p>
                </div>
            </div>
        </footer>

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/simple-anime.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

        <!-- Inicio Footer Wordpress -->
        <?php wp_footer(); ?>
        <!-- Fim Footer Wordpress -->

    </body>
</html>