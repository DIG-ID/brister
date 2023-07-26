<?php
/**
 * Template Name: Services Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
			get_template_part( 'template-parts/pages/page', 'header' );
				get_template_part( 'template-parts/pages/services/intro' );
				get_template_part( 'template-parts/pages/services/advantages' );
				get_template_part( 'template-parts/pages/services/how-it-works' );
				get_template_part( 'template-parts/pages/services/fridge' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();