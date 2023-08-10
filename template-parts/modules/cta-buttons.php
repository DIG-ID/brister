<div class="cta-buttons-fixed fixed bottom-0 w-full bg-white py-4 px-4 gap-2 md:gap-4 flex justify-between lg:hidden lg:invisible drop-shadow-[0_-15px_15px_rgba(0,0,0,0.25)]">
	<?php
	$link_sales = get_field( 'cta_buttons_contact_sales', 'options' );
	if ( $link_sales ) :
		$link_url    = $link_sales['url'];
		$link_title  = $link_sales['title'];
		$link_target = $link_sales['target'] ? $link_sales['target'] : '_self';
		?>
		<a class="btn btn--secondary !w-full whitespace-nowrap !text-xs md:!text-base !px-4" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
			<?php echo esc_html( $link_title ); ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
				<path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</a>
		<?php
	endif;
	$link_shop = get_field( 'cta_buttons_got_to_shop', 'options' );
	if ( $link_shop ) :
		$link_url    = $link_shop['url'];
		$link_title  = $link_shop['title'];
		$link_target = $link_shop['target'] ? $link_shop['target'] : '_self';
		?>
		<a class="btn btn--primary !w-full whitespace-nowrap !text-xs md:!text-base !px-4" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
			<?php echo esc_html( $link_title ); ?>
			<svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
				<path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
		</a>
		<?php
	endif;
	?>
</div>