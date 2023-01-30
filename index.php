<?php get_header(); ?>

<main>
    <div class="conteudo">
        <!-- SLIDE COMENTADO PARA TESTAR O SLIDE NO PLUGIN -->
        <div class="slide">
            <div class="box">
                <?php echo do_shortcode( '[slide]' );  ?>
            </div>
        </div>

        <div id="portal-transparencia">
            <a href="google.com" target="_blank">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>    
                    Portal da Transparência
                </button>
            </a>
        </div>

        <div class="titulos-index">
            <h3>NOTÍCIAS</h3>
        </div>
        <div id="posts-container" class="container">

            <?php
            /* se existir posts */
            if (have_posts()):
                    while (have_posts()): ?>
                        <?php the_post();
                        ?>
                        <div class="post-box">
                            <a href="<?= the_permalink() ?>">
                                <?php if( has_post_thumbnail()) : 
                                    the_post_thumbnail ('medium', array( 'class' => 'img-fluid') );
                                endif;
                                ?>
                            </a>
                            <div class="post-title">
                                <a href="<?= the_permalink() ?>"><?= the_title() ?></a> <br>
                            </div>
                            
                            <div class="post-data">
                                <p><?= the_time('d - F, Y')?></p>
                            </div>
                            <div class="post-saiba-mais">
                                <a href="<?= the_permalink() ?>"><button class="btn btn-saiba-mais">Leia mais...</button></a>
                            </div>
                        </div>
                        
                    <?php endwhile;

            /* caso não exista */
            else:
                ?>
                <p>Não existem posts</p>
                <?php
            endif;
            ?>
        </div>
        <div class="btn-noticias">
            <button class="btn btn-todas-noticias">TODAS AS NOTÍCIAS</button>
        </div>
    </div>
</main>

<?php get_footer();