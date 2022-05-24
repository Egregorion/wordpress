<?php 

get_header();
$query = get_queried_object();
var_dump($query); ?>

<h1><?php the_terms($post->ID, 'boardgames') ?></h1>

<?php
if ( have_posts() ) : ?>
    <h1></h1>
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <span><?php the_category() ?></span>
    <?php endwhile; 
endif;

get_footer();