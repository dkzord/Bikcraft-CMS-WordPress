<?php $contatos = get_page_by_title('contatos'); ?>

<style type="text/css">
    .quebra {

        background: #000 url("<?php the_field('background_footer', $contatos); ?>") no-repeat center;
        background-size: cover;
    }
</style>   
   
   <!-- QUEBRA ANTES DO FOOTER -->
        <div class="quebra">
        
                <blockquote class="quote-externo container">
                <?php the_field('quote_footer', $contatos); ?>
                <cite><?php the_field('cite_footer', $contatos); ?></cite>
                </blockquote>
            
        </div>

        <!-- FOOTER -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="grid-8 footer_historia">
                        <h3>Nossa história</h3>
                        <?php the_field('story_footer', $contatos); ?>
                    </div>

                    <div class="grid-4 footer_contatos">
                        <h3>Contato</h3>
                        <ul>
                            <li>- <?php the_field('phone', $contatos); ?></li>
                            <li>- <?php the_field('email', $contatos); ?></li>
                            <li>- <?php the_field('address2', $contatos); ?></li>
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
                    <p class="grid-16"> &copy;<?php bloginfo('name') ?> <?php echo date('Y'); ?> - Alguns direitos reservadors</p>
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