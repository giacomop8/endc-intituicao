<!-- header -->
<?php get_header(); ?>

<main>
    <?php
    // Selecionar tipo de conteúdo a ser buscado
    $args = array(
        'post_type' => 'post', // tipo de conteúdo, no caso, "post"
    );
    $query = new WP_Query($args);
    set_query_var('my_query', $query);
    
    if(have_posts()) :
        while(have_posts()) : the_post();

        get_template_part('page-templates/content', 'search');

        endwhile;
    else:
        'Sem resultados de pequisa';
    endif;
    wp_reset_query();
    ?>
    <div class="pagination">
        <span class="antes">            
            <?php next_posts_link('Mais antigos'); ?>
        </span>
        <span class="depois">
            <?php previous_posts_link('Mais novos'); ?>
        </span>
    </div>
    
</main>

<!-- footer -->
<?php get_footer();