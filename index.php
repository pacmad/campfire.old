<?php get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2><?php
		the_content( 'Read More' );
		the_category();
	endwhile;
endif;

get_footer();
