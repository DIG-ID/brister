<section class="section-how-it-works py-36 px-8 w-full bg-dark-green grid grid-cols-12 gap-4 items-center">
	<div class="col-span-4 col-start-2 text-end">
		<h2 class="font-montbold text-6xl text-light-green uppercase mb-6"><?php echo wp_kses_post( get_field( 'how_it_works_title' ) ); ?></h2>
		<p class="font-montlight text-lg text-light-green leading-8 mb-4"><?php echo wp_kses_post( get_field( 'how_it_works_description' ) ); ?></p>
		<?php
		$link = get_field( 'how_it_works_link' );
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
	<div class="col-span-4 col-start-7">
		<?php
		if ( have_rows( 'how_it_works_list' ) ) :
			echo '<ol class="list-decimal marker:text-lime-green marker:text-6xl marker:font-montbold">';
			while ( have_rows( 'how_it_works_list' ) ) :
				the_row();
				$icon = get_sub_field( 'image' );
				?>
				<li class="pl-4 ml-4 mb-14">
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