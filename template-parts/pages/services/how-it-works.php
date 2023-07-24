<section class="section-how-it-works py-20 md:py-36 px-4 md:px-8 w-full bg-dark-green grid grid-cols-1 md:grid-cols-12 gap-4 items-center -mt-7 relative -z-[2]">
	<div class=" md:col-span-4 md:col-start-2 md:text-end mb-12 md:mb-0">
		<h2 class="font-montbold text-6xl text-light-green uppercase mb-6"><?php echo wp_kses_post( get_field( 'how_it_works_title' ) ); ?></h2>
		<p class="font-montlight text-lg text-light-green leading-8 mb-4"><?php echo wp_kses_post( get_field( 'how_it_works_description' ) ); ?></p>
		<?php
		$link = get_field( 'how_it_works_link' );
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
	<div class="md:col-span-4 md:col-start-7">
		<?php
		if ( have_rows( 'how_it_works_list' ) ) :
			echo '<ol class="list-decimal marker:text-lime-green marker:text-6xl marker:font-montbold">';
			while ( have_rows( 'how_it_works_list' ) ) :
				the_row();
				$icon = get_sub_field( 'image' );
				?>
				<li class="pl-4 ml-16 md:ml-4 mb-14">
					<?php echo wp_get_attachment_image( $icon, 'full', false, array( 'class' => 'max-w-full object-cover mb-4' ) ); ?>
					<p class="font-sans text-2xl text-light-green"><?php the_sub_field( 'description' ); ?></p>
				</li>
				<?php
			endwhile;
			echo '</ol>';
		endif;
		?>
	</div>
</section>