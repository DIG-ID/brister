<?php
/**
 * Template Name: About Page Template
 */

get_header();

do_action( 'before_main_content' );
	get_template_part( 'template-parts/pages/page', 'header' );
	get_template_part( 'template-parts/pages/about/intro' );
	get_template_part( 'template-parts/pages/about/team' );
	get_template_part( 'template-parts/pages/about/mission' );
	get_template_part( 'template-parts/pages/about/partners' );
do_action( 'after_main_content' );

get_footer();