<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-blog col-span-4 flex flex-col rounded-3xl overflow-hidden bg-white mb-8 text-start' ); ?>>
	<figure class="relative">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'full', array( 'class' => 'object-cover' ) ); ?>
		</a>
		<span class="absolute top-4 left-4 bg-green text-light-green font-sans text-xs uppercase rounded-full py-2 px-5">
			<?php
			$categories = get_the_category();
			if ( $categories ) :
				echo esc_html( $categories[0]->name );
			endif;
			?>
		</span>
	</figure>
	<div class="card-blog__content px-6 py-8">
		<span class="flex items-center gap-2 font-sans text-sm text-green mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"><path d="M8.5 2V5M16.5 2V5M4 9.09H21M21.5 8.5V17C21.5 20 20 22 16.5 22H8.5C5 22 3.5 20 3.5 17V8.5C3.5 5.5 5 3.5 8.5 3.5H16.5C20 3.5 21.5 5.5 21.5 8.5Z" stroke="#10664F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.1949 13.7002H16.2039M16.1949 16.7002H16.2039M12.4949 13.7002H12.5049M12.4949 16.7002H12.5049M8.79395 13.7002H8.80395M8.79395 16.7002H8.80395" stroke="#10664F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><?php echo get_the_date(); ?></span>
		<a class="transition-all duration-300 ease-in-out hover:text-lime-green" href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="font-sans font-bold text-2xl text-dark-green  mb-6 line-clamp-2 transition-all duration-300 ease-in-out hover:text-green">', '</h3>' ); ?></a>
		<p class="font-sans font-medium text-base text-dark-green leading-6 mb-6"><?php the_field( 'position' ); ?></p>
		<a class="btn display inline-flex items-center gap-2 font-medium text-base underline underline-offset-4 transition-all duration-300 ease-in hover:text-green hover:font-semibold" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Weiterlesen', 'brister' );?> <svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none"><path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
	</div>
</article>