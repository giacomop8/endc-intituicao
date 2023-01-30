<main>
    <div class="conteudo container">
        <a class="link-title" href="<?php the_permalink(); ?>">
            <h2 class="titulo-search"><?php the_title(); ?></h2>
            <div class="search p-3">        
                <?php the_post_thumbnail('medium', array( 'class' => 'img-fluid' )); ?>
                <p class="p-2"><?php the_excerpt(); ?></p>
            </div>
        </a>
    </div>
    
</main>