<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php wp_head(); ?>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            
            <nav class="navbar navbar-expand-lg menu-cor">
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    Menu
                </button>
                <div class="collapse navbar-collapse menu-div" id="navbarTogglerDemo03">
                    <?php 
                        wp_nav_menu(
                            array(
                                'menu_class' => 'navbar-nav mr-auto mt-2 mt-lg-0',
                                'theme_location' => 'primary',
                                'container' => 'false'
                            )
                        );
                    ?>
                        <li>
                            <a href="">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-universal-access-circle" viewBox="0 0 16 16">
                                    <path d="M8 4.143A1.071 1.071 0 1 0 8 2a1.071 1.071 0 0 0 0 2.143Zm-4.668 1.47 3.24.316v2.5l-.323 4.585A.383.383 0 0 0 7 13.14l.826-4.017c.045-.18.301-.18.346 0L9 13.139a.383.383 0 0 0 .752-.125L9.43 8.43v-2.5l3.239-.316a.38.38 0 0 0-.047-.756H3.379a.38.38 0 0 0-.047.756Z"/>
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8Z"/>
                                </svg>
                                ACESSIBILIDADE
                            </a>
                        </li>
                </div>
            </nav>
            <nav class="bg-1 d-flex align-items-center justify-content-center flex-wrap">
                <a href="<?= home_url('/');?>"><div class="logo">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if($logo == null) {
                            echo "";
                        }
                        else{
                            $imagem = $logo[0];
                            var_dump($imagem);
                            return '<img width="100" src="'.$imagem.'">';                        
                            
                        }

                        
                    ?>
                </div></a>
                <div class="descricao">
                    <h2>Prefeitura Municipal</h2>
                    <a href="<?= home_url('/');?>"><h1><?php bloginfo('name'); ?></h1></a>
                </div>
                <div class="pesquisa">
                    <center>
                    <div class="btn-atalhos">
                        <a href="https://goo.gl/maps/PUpE3NU5mHwF5U4Q7" target="_blank">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                                LOCALIZAÇÃO DA CIDADE
                            </button>
                        </a>
                    </div>
                    <div class="container">
                        <form class="my-2 my-lg-0" role="search" method="get" action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Pesquise aqui" aria-label="Search" aria-describedby="button-addon2" name="s">
                                <div class="input-group-append">
                                    <button class="btn btn-pesquisa" type="search" id="button-addon2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </center>
                </div>
            </nav>
            
        </header>