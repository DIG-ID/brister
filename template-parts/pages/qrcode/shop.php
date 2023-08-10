<section class="section-shop py-36 px-4 md:px-8 w-full text-center flex flex-col justify-center items-center bg-light-green">
	<div class="md:max-w-screen-md">
		<h2 class="title-section text-green uppercase mb-6"><?php the_field( 'shop_title' ); ?></h2>
		<p class="font-montlight text-lg leading-8 text-dark-green mb-12"><?php the_field( 'shop_description' ); ?></p>
		<?php
		$link = get_field( 'shop_shop_url' );
		if ( $link ) :
			$link_url    = $link['url'];
			$link_title  = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="btn btn--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none"><path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
		<?php
		endif;
		?>
	</div>
</section>