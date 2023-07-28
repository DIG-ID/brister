<?php
get_header();
do_action( 'before_main_content' );
?>

	<header class="page-header alignwide">
		<h1 class="page-title"><?php esc_html_e( 'Hier ist nichts', 'brister' ); ?></h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p><?php esc_html_e( 'Es sieht so aus, als ob an diesem Ort nichts gefunden wurde. Vielleicht eine Suche versuchen?', 'brister' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
do_action( 'after_main_content' );
get_footer();