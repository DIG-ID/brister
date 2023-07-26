<section class="section-partners py-20 md:py-36 w-full">
	<div class="text-center px-4 md:px-8 md:max-w-screen-md mx-auto">
		<h2 class="title-section text-green"><?php esc_html_e( 'Partners', 'brister' ); ?></h2>
	</div>
	<?php
	if ( have_rows( 'partners_partners_list' ) ) :
		echo '<div class="partners-carousel w-full flex justify-center items-center mx-auto">';
		while ( have_rows( 'partners_partners_list' ) ) :
			the_row();
			$partner_logo = get_sub_field( 'logo' );
			$partner_url  = get_sub_field( 'url' );
			?>
			<a href="<?php echo esc_url( $partner_url ); ?>" target="_blank" class="partner carousel-cell flex flex-col items-center justify-center p-4 mx-8">
				<?php echo wp_get_attachment_image( $partner_logo, 'full', false, array( 'class' => 'max-w-full object-cover block max-w-[200px]' ) ); ?>
			</a>
			<?php
		endwhile;
		echo '</div>';
	endif;
	?>

</section>