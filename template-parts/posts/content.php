<div class="post-content w-full px-4 lg:px-8 lg:py-32 relative grid grid-cols-12">
	<?php
	if ( has_post_thumbnail() ) :
		?><figure class="absolute grid grid-cols-12 gap-4 px-8 w-full -top-[300px] left-1/2 -translate-x-1/2 "><?php
			the_post_thumbnail( 'full', array( 'class' => 'w-full object-cover col-span-10 col-start-2 max-h-[700px]' ) );
		?></figure><?php
	endif;
	?>
	<div class="post-content-wrapper col-start-3 col-span-8 pt-[350px]">
		<?php the_content(); ?>
	</div>
</div>