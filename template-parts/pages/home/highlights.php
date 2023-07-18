<section class="section section-highlights w-full px-8 pt-32 pb-24 grid grid-cols-3 gap-4">
	<?php
	if ( have_rows( 'intro_section_blocks' ) ) :
		while( have_rows( 'intro_section_blocks' ) ) :
			the_row();
			$image = get_sub_field( 'image' );
			?>
			<div class="highlight-card p-4 mb-8">
				<figure class="relative mb-6 after:content-[''] after:block after:absolute after:bottom-4 after:left-4 after:border-4 after:border-green after:w-full after:h-full after:rounded-tr-3xl after:rounded-br-3xl after:rounded-bl-3xl">
					<?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'max-w-full object-cover rounded-tr-3xl rounded-br-3xl rounded-bl-3xl' ) ); ?>
				</figure>
				<p class="font-sans font-semibold text-2xl text-dark-green px-6"><?php the_sub_field( 'title' ); ?></p>
			</div>
			<?php
		endwhile;
	endif;
	?>
</section>