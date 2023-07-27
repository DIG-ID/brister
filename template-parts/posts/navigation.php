<section class="section-post-navigation">
	<?php
	$args = array(
		'prev_text' => sprintf( esc_html__( 'Previous post', 'brister' ), '<span class="meta-nav"> < </span>' ),
		'next_text' => sprintf( esc_html__( 'Newer post %s', 'brister' ), '<span class="meta-nav"> > </span>' )
	);
	$navigation = get_the_post_navigation( $args );
	if ( $navigation ) :
		echo $navigation;
	endif;
	?>
</section>