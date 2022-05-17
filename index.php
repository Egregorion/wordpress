<?php 

get_header();

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <span class="pills"><?php the_category() ?></span>
    <?php endwhile; 
endif; 

get_footer();
?>