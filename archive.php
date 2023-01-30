<?php
/* 
Template Name: Full Width
Template Post Type: page,post
*/

get_header(); ?>

<main>
    <div class="conteudo container">
        <h1><?php the_archive_title(); ?></h1>
        <div class="row">
            <div class="col-sm-12">                
                <?php
                    if(have_posts()) :
                        while(have_posts()) :
                            the_post();
                            get_template_part('partials/post', 'default');
                        endwhile; ?>

                        <div class="d-flex bg-light p-3 mb-5 border">
                            <div class="mr-auto">
                                <?php previous_posts_link('Próxima'); ?>
                            </div>
                            <div class="ml-auto">
                                <?php previous_posts_link('Anterior'); ?>
                            </div>
                        </div>
                    
                    <?php else: 
                        echo ''; endif; ?>
            </div>
        </div>      
    </div>

</main>

<!-- footer -->
<?php get_footer();