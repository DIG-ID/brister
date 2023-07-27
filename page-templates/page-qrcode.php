<?php
/**
 * Template Name: QRCode Page Template
 */

get_header( 'simple' );
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/qrcode/header' );
			get_template_part( 'template-parts/pages/qrcode/menu-this-week' );
			get_template_part( 'template-parts/pages/qrcode/menu-next-week' );
			get_template_part( 'template-parts/pages/qrcode/shop' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
