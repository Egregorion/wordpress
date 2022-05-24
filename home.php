<?php 
// si on souhaite afficher autre chose que ce qui est prévu par le template de Wordpress, on peut avoir recours à des requêtes personnnalisées
$boardgames = new WP_Query([
    'post_type' => 'boardgames'
]);


get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <h2><?php the_title() ?></h2>
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

if ( $boardgames->have_posts() ) : 
    while ( $boardgames->have_posts() ) : $boardgames->the_post(); ?>
        <div class="row">
            <div class="card col-12 col-md-6 col-lg-3">
                <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Go to the game</a>
                </div>
            </div>
        </div>
        
    <?php endwhile; 
endif; 

get_footer();

?>