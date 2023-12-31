<section class="section-fridge bg-gradient-to-t lg:bg-gradient-to-r from-light-green from-10% via-light-green via-80% lg:via-60% to-white to-80% lg:to-60% py-20 lg:py-36 px-4 lg:px-8 w-full grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
	<div class="lg:col-span-6 xl:col-span-4 lg:col-start-1 xl:col-start-2 order-2 lg:order-1">
		<h2 class="title-section font-montbold text-6xl text-green uppercase mb-6"><?php the_field( 'fridge_section_title' ); ?></h2>
		<p class="font-montlight text-base text-dark-green leading-8 mb-12"><?php the_field( 'fridge_section_description' ); ?></p>
		<?php
		if ( have_rows( 'fridge_section_list' ) ) :
			echo '<ul class="fridge-list list-image-checkmark list mb-6">';
			while ( have_rows( 'fridge_section_list' ) ) :
				the_row();
				$icon = get_sub_field( 'image' );
				?>
				<li class="pl-8 ml-3 mb-14 relative">
					<h3 class="font-sans font-bold text-xl text-green uppercase mb-4"><?php the_sub_field( 'title' ); ?></h3>
					<p class="font-sans text-base text-dark-green leading-8"><?php the_sub_field( 'description' ); ?></p>
				</li>
				<?php
			endwhile;
			echo '</ul>';
		endif;
		?>
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
	<div class="lg:col-span-6 xl:col-span-5 lg:col-start-7 xl:col-start-7 order-1 lg:order-2 mb-6 lg:mb-0 pr-4 lg:pr-0">
		<?php $fridge_img = get_field( 'fridge_section_image' ); ?>
		<figure class="relative lg:mb-6 after:content-[''] after:block after:absolute after:bottom-4 after:left-4 after:border-4 after:border-green after:w-full after:h-full after:rounded-3xl">
			<?php echo wp_get_attachment_image( $fridge_img, 'full', false, array( 'class' => 'max-w-full object-cover rounded-3xl' ) ); ?>
		</figure>
	</div>
</section>