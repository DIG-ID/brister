<section class="section-advantages px-4 lg:px-8 py-20 lg:py-32 grid grid-cols-1 lg:grid-cols-12 xl:grid-cols-12 relative">
	<div class="lg:col-span-10 xl:col-span-8 lg:col-start-2 xl:col-start-3 text-center">
		<h2 class="title-section text-green hyphens-auto"><?php the_field( 'advantages_title' ); ?></h2>
		<p class="text-body text-dark-green mb-12"><?php the_field( 'advantages_description' ); ?></p>
		<?php
		if ( have_rows( 'advantages_list' ) ) :
			echo '<ul class="advantages-list w-full list lg:columns-2 lg:gap-8 text-start">';
			while ( have_rows( 'advantages_list' ) ) :
				the_row();
				?>
				<li class="ml-8 pl-8 mb-10 relative">
					<p class="font-sans font-bold text-xl text-dark-green leading-8 break-words hyphens-auto"><?php the_sub_field( 'description' ); ?></p>
				</li>
				<?php
			endwhile;
			echo '</ul>';
		endif;
		?>
	</div>
</section>