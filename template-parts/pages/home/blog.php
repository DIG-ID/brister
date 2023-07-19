<section class="section-testimonials pt-36 pb-40 px-8 w-full bg-dark-green text-center">
	<div class="text-center px-8 max-w-screen-md mx-auto">
		<h2 class="title-section text-light-green"><?php esc_html_e( 'Blog', 'brister' ); ?></h2>
		<p class="description-section text-light-green">Gutes und gesundes Essen ist Lebensqualität.<br> Zusammen mit unseren Regionalen Partner bieten.</p>
	</div>
	<div class="blog-grid w-full grid grid-cols-12 gap-8">
		<?php
		$args = array(
			'post_type' => 'post',
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				get_template_part( 'template-parts/components/card', 'blog' );
			endwhile;
		endif;
		?>
	</div>
	<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn--primary mt-6"><?php esc_html_e( 'Mehr erfahren', 'brister' ); ?><svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none"><path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
</section>