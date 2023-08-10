<section class="section-mission py-20 lg:py-36 px-4 md:px-8 w-full text-center flex flex-col justify-center items-center -mt-24" style="background: linear-gradient(180deg, rgba(3, 47, 53, 0.70) 0%, rgba(3, 47, 53, 0.70) 100%), url('<?php echo esc_url( wp_get_attachment_image_url( get_field( 'mission_image' ), 'full' ) ); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<div class="md:max-w-screen-md">
		<h2 class="title-section text-white uppercase mb-6"><?php the_field( 'mission_title' ); ?></h2>
		<p class="font-montlight text-base lg:text-lg leading-8 text-white lg:mb-12"><?php the_field( 'mission_description' ); ?></p>
	</div>
</section>