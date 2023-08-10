<?php
get_header();
do_action( 'before_main_content' );
?>

	<header class="page-header bg-gradient-to-b from-dark-green to-green gap-4 px-8 pt-40 pb-32">

		<h1 class="font-montbold font-extrabold text-white text-6xl uppercase text-center"><?php esc_html_e( 'Hier ist nichts', 'brister' ); ?></h1>

	</header>

	<div class="error-404 not-found w-full px-4 lg:px-8 lg:py-32">
		<div class="not-found-content text-center">
			<p class="text-body !text-xl mb-10"><?php esc_html_e( 'Es sieht so aus, als ob an diesem Ort nichts gefunden wurde. Vielleicht eine Suche versuchen?', 'brister' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
do_action( 'after_main_content' );
get_footer();