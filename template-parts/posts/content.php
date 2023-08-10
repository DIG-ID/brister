<div class="post-content w-full px-4 lg:px-8 lg:py-32 relative grid grid-cols-1 lg:grid-cols-12 mb-16 lg:mb-0">
	<?php
	if ( has_post_thumbnail() ) :
		?><figure class="absolute grid grid-cols-1 lg:grid-cols-12 gap-4 px-4 lg:px-8 w-full -top-[120px] lg:-top-[300px] left-1/2 -translate-x-1/2 "><?php
			the_post_thumbnail( 'full', array( 'class' => 'w-full object-cover lg:col-span-10 lg:col-start-2 max-h-[700px]' ) );
		?></figure><?php
	endif;
	?>
	<div class="post-content-wrapper lg:col-start-3 lg:col-span-8 pt-[160px] lg:pt-[350px]">
		<?php the_content(); ?>
	</div>
</div>