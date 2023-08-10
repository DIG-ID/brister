<header class="page-header grid cols-1 lg:grid-cols-12 gap-4 px-4 lg:px-8" style="background: linear-gradient(180deg, rgba(3, 47, 53, 0.50) 0%, rgba(16, 102, 79, 0.50) 100%), url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<div class="  lg:col-start-2 lg:col-span-5 py-32 lg:py-48">
		<h1 class="font-montbold font-extrabold text-white text-3xl lg:text-6xl uppercase mb-8"><?php the_title(); ?></h1>
		<p class="description-section text-light-green !mb-0"><?php echo wp_kses_post( wp_strip_all_tags( get_the_content() ) ); ?></p>
	</div>
</header>