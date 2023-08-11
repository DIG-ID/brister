<section class="section-fridge bg-gradient-to-t lg:bg-gradient-to-r from-light-green from-10% via-light-green via-80% lg:via-60% to-white to-80% lg:to-60% py-20 lg:py-36 px-4 lg:px-8 w-full grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
	<div class="lg:col-span-6 xl:col-span-4 lg:col-start-1 xl:col-start-2 order-2 lg:order-1">
		<h2 class="title-section font-montbold text-6xl text-green uppercase mb-6"><?php the_field( 'fridge_title' ); ?></h2>
		<p class="font-montlight text-base text-dark-green leading-8 mb-12"><?php the_field( 'fridge_description' ); ?></p>
		<?php
		if ( have_rows( 'fridge_list' ) ) :
			echo '<ul class="fridge-list list-image-checkmark list lg:mb-6">';
			while ( have_rows( 'fridge_list' ) ) :
				the_row();
				$icon = get_sub_field( 'image' );
				?>
				<li class="pl-8 ml-3 mb-14 relative">
					<h3 class="font-sans font-bold text-xl text-green uppercase mb-4 break-words hyphens-auto"><?php the_sub_field( 'title' ); ?></h3>
					<p class="font-sans text-base text-dark-green leading-8 break-words hyphens-auto"><?php the_sub_field( 'description' ); ?></p>
				</li>
				<?php
			endwhile;
			echo '</ul>';
		endif;
		?>
	</div>
	<div class="lg:col-span-6 xl:col-span-5 lg:col-start-7 xl:col-start-7 order-1 lg:order-2 mb-6 lg:mb-0 pr-4 lg:pr-0">
		<?php $fridge_img = get_field( 'fridge_image' ); ?>
		<figure class="relative mb-6 after:content-[''] after:block after:absolute after:bottom-4 after:left-4 after:border-4 after:border-green after:w-full after:h-full after:rounded-3xl">
			<?php echo wp_get_attachment_image( $fridge_img, 'full', false, array( 'class' => 'max-w-full object-cover rounded-3xl max-h-[700px]' ) ); ?>
		</figure>
	</div>
</section>