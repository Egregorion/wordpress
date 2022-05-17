<?php 

get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <h2><?php the_title() ?></h2>
            <div><?php the_content() ?></div>
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="<?php the_field('image_a_gauche') ?>" alt="">
                </div>
                <div class="col">
                    <p><?php the_field('texte_a_droite') ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; 
endif; 

get_footer();

?>