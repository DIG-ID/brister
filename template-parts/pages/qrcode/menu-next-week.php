<?php
$menus_next_week = get_field( 'menus_next_week' );
if ( $menus_next_week ) :
	?>
	<section class="section-menu-this-week pt-20 md:pt-36 pb-24 md:pb-40 px-4 md:px-8 w-full bg-dark-green text-center">
		<div class="text-center md:px-8 max-w-full md:max-w-screen-md mx-auto">
			<h2 class="title-section text-light-green"><?php esc_html_e( 'Next week', 'brister' ); ?></h2>
			<svg class="mx-auto mb-12" xmlns="http://www.w3.org/2000/svg" width="44" height="3" viewBox="0 0 44 3" fill="none">
				<path d="M42.6669 2.48711H33.3335C32.6002 2.48711 32.0002 1.92751 32.0002 1.24356C32.0002 0.559601 32.6002 0 33.3335 0H42.6669C43.4002 0 44.0002 0.559601 44.0002 1.24356C44.0002 1.92751 43.4002 2.48711 42.6669 2.48711ZM26.6668 2.48711H17.3334C16.6001 2.48711 16.0001 1.92751 16.0001 1.24356C16.0001 0.559601 16.6001 0 17.3334 0H26.6668C27.4001 0 28.0001 0.559601 28.0001 1.24356C28.0001 1.92751 27.4001 2.48711 26.6668 2.48711ZM10.6667 2.48711H1.33334C0.600004 2.48711 0 1.92751 0 1.24356C0 0.559601 0.600004 0 1.33334 0H10.6667C11.4001 0 12.0001 0.559601 12.0001 1.24356C12.0001 1.92751 11.4001 2.48711 10.6667 2.48711Z" fill="#10664F"/>
			</svg>
		</div>
		<div class="menus-grid w-full grid grid-cols-1 lg:grid-cols-12 gap-8">
			<?php
			foreach ( $menus_next_week as $post ) :
				setup_postdata( $post );
				get_template_part( 'template-parts/components/card', 'menu' );
			endforeach;
			?>
		</div>
	</section>
	<?php
	// Reset the global post object so that the rest of the page works correctly.
	wp_reset_postdata();
endif;