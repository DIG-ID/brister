<section class="section-philosophie py-36 px-8 w-full text-center flex flex-col justify-center items-center" style="background: linear-gradient(180deg, rgba(3, 47, 53, 0.70) 0%, rgba(3, 47, 53, 0.70) 100%), url('<?php echo esc_url( wp_get_attachment_image_url( get_field( 'philosophie_section_image' ), 'full' ) ); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<div class="max-w-screen-md">
		<h2 class="font-montbold text-6xl text-white uppercase mb-6"><?php the_field( 'philosophie_section_title' ); ?></h2>
		<p class="font-montlight text-lg leading-8 text-white mb-12"><?php the_field( 'philosophie_section_description' ); ?></p>
		<?php
		$link = get_field( 'fridge_section_link' );
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