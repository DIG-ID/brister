<article id="post-<?php the_ID(); ?>" <?php post_class( 'carousel-cell card-testimonial flex flex-col p-12 border-4 border-green rounded-tr-3xl rounded-br-3xl rounded-bl-3xl mx-8 max-w-4xl' ); ?>>
	<svg width="37" height="30" viewBox="0 0 37 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-6">
		<path d="M14.3108 0.895998V7.428C9.25077 8.164 7.22677 11.66 7.22677 15.432H14.9548V29.784H0.510766V16.536C0.510766 7.336 6.12277 1.816 14.3108 0.895998ZM35.4708 0.895998V7.428C30.4108 8.164 28.4788 11.66 28.4788 15.432H36.2068V29.784H21.6708V16.536C21.6708 7.336 27.2828 1.816 35.4708 0.895998Z" fill="#10664F"/>
	</svg>
	<blockquote class="font-sans text-xl leading-10 mb-11"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></blockquote>
	<figure class="self-start relative max-w-[120px] mb-6 after:content-[''] after:inline-block after:absolute after:bottom-2 after:left-2 after:border-4 after:border-green after:w-full after:h-full after:rounded-full">
		<?php the_post_thumbnail( 'full', array( 'class' => 'object-cover rounded-full' ) ); ?>
	</figure>
	<?php the_title( '<h3 class="font-sans font-bold text-base text-dark-green leading-6">', '</h3>' ); ?>
	<p class="font-sans font-medium text-base text-dark-green leading-6"><?php the_field( 'position' ); ?></p>
</article>