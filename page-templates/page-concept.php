<?php
/**
 * Template Name: Concept Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/page', 'header' );
				get_template_part( 'template-parts/pages/concept/intro' );
				get_template_part( 'template-parts/pages/concept/concepts' );
				get_template_part( 'template-parts/pages/concept/philosophie' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_template_part( 'template-parts/modules/cta-buttons' );
get_footer();