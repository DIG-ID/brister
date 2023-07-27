<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/posts/header' );
				get_template_part( 'template-parts/posts/content' );
				get_template_part( 'template-parts/posts/navigation' );
			do_action( 'after_post_content' );
			get_template_part( 'template-parts/posts/related' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
