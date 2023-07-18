<section class="section-fridge bg-gradient-to-r from-light-green from-10% via-light-green via-60% to-white to-60% py-36 px-8 w-full grid grid-cols-12 gap-4 items-center">
	<div class="col-span-4 col-start-2">
		<h2 class="font-montbold text-6xl text-green uppercase mb-6"><?php the_field( 'fridge_section_title' ); ?></h2>
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
			<a class="btn--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php
		endif;
		?>
	</div>
	<div class="col-span-5 col-start-7">
		<?php $fridge_img = get_field( 'fridge_section_image' ); ?>
		<figure class="relative mb-6 after:content-[''] after:block after:absolute after:bottom-4 after:left-4 after:border-4 after:border-green after:w-full after:h-full after:rounded-3xl">
			<?php echo wp_get_attachment_image( $fridge_img, 'full', false, array( 'class' => 'max-w-full object-cover rounded-3xl' ) ); ?>
		</figure>
	</div>
</section>