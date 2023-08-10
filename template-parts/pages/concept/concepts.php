<section class="section-concepts px-4 lg:px-8 py-20 lg:py-40 relative">

	<?php
	if ( have_rows( 'concepts_concept_item' ) ) :
		echo '<div class="concepts-list">';
		$item_index = 1;
		while ( have_rows( 'concepts_concept_item' ) ) :
			the_row();
			$image = get_sub_field( 'image' );

			// Check if the item index is even or odd
			$even_item = $item_index % 2 === 0;

			if ( $even_item ) :
				?>
				<div class="concept-item grid grid-cols-1 lg:grid-cols-12 lg:gap-8 items-center mb-20 lg:mb-12">
					<div class="concept-item-content lg:col-start-2 lg:col-span-5 order-2 lg:order-1">
						<h2 class="title-section text-dark-green"><?php the_sub_field( 'title' ); ?></h2>
						<p class="text-body"><?php the_sub_field( 'description' ); ?></p>
					</div>
					<div class="concept-item-img lg:col-span-5 mr-4 order-1 lg:order-2 mb-6 lg:mb-0">
						<figure class="relative lg:mb-6 after:content-[''] after:block after:absolute after:bottom-4 after:left-4 after:border-4 after:border-green after:w-full after:h-full after:rounded-tr-3xl after:rounded-br-3xl after:rounded-bl-3xl">
							<?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'max-w-full object-cover rounded-tr-3xl rounded-br-3xl rounded-bl-3xl' ) ); ?>
						</figure>
					</div>
				</div>
				<?php
			else :
				?>
				<div class="concept-item grid grid-cols-1 lg:grid-cols-12 lg:gap-8 items-center mb-20 lg:mb-12">
					<div class="concept-item-img lg:col-start-2 lg:col-span-5 mr-4 mb-6 lg:mb-0">
						<figure class="relative lg:mb-6 after:content-[''] after:block after:absolute after:bottom-4 after:left-4 after:border-4 after:border-green after:w-full after:h-full after:rounded-tr-3xl after:rounded-br-3xl after:rounded-bl-3xl">
							<?php echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'max-w-full object-cover rounded-tr-3xl rounded-br-3xl rounded-bl-3xl' ) ); ?>
						</figure>
					</div>
					<div class="concept-item-content lg:col-span-5">
						<h2 class="title-section text-dark-green"><?php the_sub_field( 'title' ); ?></h2>
						<p class="text-body"><?php the_sub_field( 'description' ); ?></p>
					</div>
				</div>
				<?php
			endif;
			$item_index++;
		endwhile;
	endif;
	echo '</div>';
	?>
</section>