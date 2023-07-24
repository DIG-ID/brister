<?php
/**
 * Template Name: Home Page Template
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/home/hero' );
		get_template_part( 'template-parts/pages/home/highlights' );
		get_template_part( 'template-parts/pages/home/how-it-works' );
		get_template_part( 'template-parts/modules/fridge' );
		get_template_part( 'template-parts/pages/home/philosophie' );
		get_template_part( 'template-parts/pages/home/testimonials' );
		get_template_part( 'template-parts/pages/home/blog' );
	do_action( 'after_main_content' );
get_footer();
