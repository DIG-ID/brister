<?php
get_header();

do_action( 'before_main_content' );
	get_template_part( 'template-parts/posts/header' );
	get_template_part( 'template-parts/posts/content' );
	get_template_part( 'template-parts/posts/navigation' );
	get_template_part( 'template-parts/posts/related' );
do_action( 'after_main_content' );

get_footer();