<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
 
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!--=== LINK TAGS ===-->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

 
    <!--=== TITLE ===-->  
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

    <!--=== CSS ===-->
    <link rel="stylesheet" href="style.css">

     
    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
      
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-7">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <img class="navbar-brand" src="<?php echo get_template_directory_uri(); ?>/imagens/logo.png"><img>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre">sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#opinioes">Opiniões</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clientes">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
            <div class="col-5 text-center margin-auto p-0">
                <div class="social mt-30">
                    <a target="_blank" href="<?php echo $facebook;?>">
                        <i class="fab fa-facebook"></i>
                    </a> 
                    <a target="_blank" href="<?php echo $instagram;?>">
                        <i class="fab fa-instagram"></i>
                    </a> 
                    <a target="_blank" href="<?php echo $youtube;?>">
                        <i class="fab fa-youtube"></i>
                    </a>   
                </div>
            </div>
        </div>
    </div>
</header>






