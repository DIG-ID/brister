<?php

get_header();

do_action( 'before_main_content' );
	get_template_part( 'template-parts/blog/header' );
	get_template_part( 'template-parts/blog/content' );
do_action( 'after_main_content' );

get_footer();