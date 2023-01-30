    <footer>
        <div class="rodape">
            <div class="p-3 rodape-secao-logo d-flex align-items-center">
                <div class="descricao">
                    <a href="<?= home_url('/');?>">
                        <div class="logo">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if($logo == null) {
                                echo '';                        
                            }
                            else{
                                $imagem = $logo[0];
                                var_dump($imagem);
                                echo '<img width="100" src="'.$imagem.'">';
                            }
                                                        
                        ?>
                        </div>
                    </a>
                    <h2>Prefeitura Municipal</h2>
                    <a href="<?= home_url('/');?>"><h1><?php bloginfo('name'); ?></h1></a>
                </div>
            </div>
            <div class="rodape-secao">
                <div class="p-3">
                    <span>ADMINISTRAÇÃO 20xx/20xx</span> <br><br>
                    <p>
                        
                    </p>
                </div>
                <div class="p-3">
                    <span>TELEFONES ÚTEIS</span> <br><br>
                    <p>
                        
                    </p>                
                </div>
                <div class="p-3">
                    <span>SIC FÍSICO - ONDE ESTAMOS</span> <br><br>
                    <p>
                        
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="rodape-direitos">
        <center>
            &copy 2022 Todos os direitos reservados. Prefeitura de Couto de Magalhães de Minas
        </center>
    </div>
</body>
</html>

<?php wp_footer();