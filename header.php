<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos de Passeio, Esporte e Retrô.">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos de Passeio, Esporte e Retrô."/>
    <meta property="og:url" content="http://bikcraft.com"/>
    <meta property="og:image" content="http://bikcraft.com/img/og-image.png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <script>document.documentElement.classList.add("js");</script>

    <!-- Inicio Wordpress Header -->
    <?php wp_head(); ?>
    <!-- Final Wordpress Header -->
</head>
    <body>
    <!-- Menu -->
        <header class="header">
            <div class="container">
                <a href="/" class="grid-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft.svg" alt="Bikcraft">
                </a>
                <nav class="grid-12 header_menu">
                    <ul>
                        <li><a href="/sobre/">Sobre</a></li>
                        <li><a href="/produtos/">Produtos</a></li>
                        <li><a href="/portfolio/">Portfólio</a></li>
                        <li><a href="/contato/">Contatos</a></li>
                    </ul>
                </nav>
            </div>
        </header>