<section class="section-advantages px-8 py-32 grid grid-cols-12 relative ">
	<div class="col-span-6 col-start-4 text-center">
		<h2 class="title-section text-green"><?php the_field( 'advantages_title' ); ?></h2>
		<p class="text-body text-dark-green mb-12"><?php the_field( 'advantages_description' ); ?></p>
		<?php
		if ( have_rows( 'advantages_list' ) ) :
			echo '<ul class="advantages-list w-full list columns-2 gap-8 text-start ml-16">';
			while ( have_rows( 'advantages_list' ) ) :
				the_row();
				?>
				<li class="pl-8 mb-10 relative">
					<p class="font-sans font-bold text-xl text-dark-green leading-8"><?php the_sub_field( 'description' ); ?></p>
				</li>
				<?php
			endwhile;
			echo '</ul>';
		endif;
		?>
	</div>
</section>