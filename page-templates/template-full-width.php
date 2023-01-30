<?php
/* 
Template Name: Full Width
Template Post Type: page,post
*/

get_header(); ?>

<main>
    <div class="conteudo container">
        <div class="row">
            <div class="col-sm-12 container">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="w-75 p-2 pb-5">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="w-75 p-2 pb-5">
                        <?php the_post_thumbnail('full', array( 'class' => 'img-fluid' )); ?>
                    </div>
                    <div class="w-75 p-2">
                        <p id="text">
                            <?php the_content(); ?>
                        </p>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>      
    </div>

</main>

<!-- footer -->
<?php get_footer();