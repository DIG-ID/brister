<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-menu col-span-4 flex flex-col rounded-3xl overflow-hidden bg-white mb-8 text-start border border-light-green' ); ?>>
	<?php $menu_link = get_field( 'menu_link' ); ?>
	<figure class="relative">
		<a href="<?php echo esc_url( $menu_link ); ?>" target="_blank">
			<?php the_post_thumbnail( 'full', array( 'class' => ' w-full object-cover' ) ); ?>
		</a>
	</figure>
	<div class="card-menu__content px-6 py-8">
		<?php
		if ( 'vegan' === get_field( 'menu_type' ) ) :
			echo '<span class="flex items-center gap-2 font-sans text-sm text-green mb-6">vegan</span>';
		elseif ( 'vegetarian' === get_field( 'menu_type' ) ) :
			echo '<span class="flex items-center gap-2 font-sans text-sm text-green mb-6">vegetarian</span>';
		endif;
		?>
		<a class="transition-all duration-300 ease-in-out hover:text-lime-green" href="<?php echo esc_url( $menu_link ); ?>"><?php the_title( '<h2 class="font-sans font-bold text-2xl text-dark-green  mb-6 line-clamp-2 transition-all duration-300 ease-in-out hover:text-green">', '</h2>' ); ?></a>
		<p class="font-sans font-medium text-base text-dark-green leading-6 mb-6"><?php echo wp_kses_post( wp_strip_all_tags( get_the_content() ) ); ?></p>
		<a class="btn display inline-flex items-center gap-2 font-medium text-base underline underline-offset-4 transition-all duration-300 ease-in hover:text-green hover:font-semibold" href="<?php echo esc_url( $menu_link ); ?>" target="_blank"><?php esc_html_e( 'Weiterlesen', 'brister' );?> <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none"><path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
	</div>
</article>