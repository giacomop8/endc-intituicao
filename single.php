<?php get_header(); ?>

<main>
    <div class="conteudo container">
        
        <div class="single">
            <div class="p-4 single-left">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="w-100 p-2" id="titulo">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="w-75 p-2 pb-2">
                        <?php the_post_thumbnail('full', array( 'class' => 'img-fluid' )); ?>
                    </div>
                    <div class="w-100 p-2" id="text">
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="single-right">
                <div class="p-4" id="ultimas-noticias-sidebar">
                    <h2>Últimas notícias</h2><hr>
                    <?php
                        $categories = get_the_category();
                        $category_name = $categories[0]->name;

                        $args = array(
                            'posts_per_page' => 5,
                            'category_name' => $category_name
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                                $query->the_post();
                                the_post_thumbnail('full', array( 'class' => 'img-fluid thumb' ));
                                the_title('<h3 class="title">', '</h3>');
                            }
                            wp_reset_postdata();
                        }
                        
                    ?>
                </div>
            </div>
        </div>      
    </div>

</main>

<!-- footer -->
<?php get_footer();