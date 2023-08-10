<section class="section-philosophie py-20 lg:-py-36 px-4 lg:px-8 w-full grid grid-cols-1 lg:grid-cols-12 gap-4 items-center relative -mt-48">
	<div class="lg:col-span-4 lg:col-start-2 order-2 lg:order-1">
		<h2 class="title-section text-light-green"><?php the_field( 'philosophie_title' ); ?></h2>
		<p class="text-body text-light-green"><?php the_field( 'philosophie_description' ); ?></p>
	</div>
	<div class="lg:col-span-5 lg:col-start-7 order-1 lg:order-2 mb-6 lg:mb-0 pr-4 lg:pr-0">
		<?php $philosophie_img = get_field( 'philosophie_image' ); ?>
		<figure class="relative lg:mb-6 after:content-[''] after:block after:absolute after:bottom-4 after:left-4 after:border-4 after:border-green after:w-full after:h-full after:rounded-3xl">
			<?php echo wp_get_attachment_image( $philosophie_img, 'full', false, array( 'class' => 'max-w-full object-cover rounded-3xl' ) ); ?>
		</figure>
	</div>
</section>