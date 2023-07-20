<section class="section-testimonials py-20 md:py-36 w-full">
	<div class="text-center px-4 md:px-8 md:max-w-screen-md mx-auto">
		<h2 class="title-section text-green"><?php esc_html_e( 'Testimonials', 'brister' ); ?></h2>
		<p class="description-section text-dark-green">Gutes und gesundes Essen ist Lebensqualität.<br> Zusammen mit unseren Regionalen Partner bieten.</p>
	</div>
	<div class="testimonials-carousel mb-8 md:mb-0">
		<?php
		$args = array(
			'post_type' => 'testimonials',
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				get_template_part( 'template-parts/components/card', 'testimonial' );
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</section>