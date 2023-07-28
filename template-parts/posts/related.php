<?php

// Get the current post's tags and categories.
$post_tags           = get_the_tags( get_the_ID() );
$post_categories     = get_the_category( get_the_ID() );
$post_tags_ids       = array();
$post_categories_ids = array();

if ( $post_tags ) :
	foreach ( $post_tags as $post_tag ) :
		$post_tags_ids[] = $post_tag->term_id;
	endforeach;
	// Args to query related posts by tag.
	$args_by_tag = array(
		'post__not_in'   => array( get_the_ID() ),
		'posts_per_page' => 3,
		'tag__in'        => $post_tags_ids,
		'orderby'        => 'date', // Display related posts by the most recent.
		'order'          => 'DESC', // Display related posts in descending order (most recent first).
	);

	// Query for related posts by tag.
	$related_posts_by_tag = new WP_Query( $args_by_tag );

	// Check if there are related posts by tag.
	if ( $related_posts_by_tag->have_posts() ) :
		?>
		<aside class="related-posts pt-20 md:pt-36 pb-24 md:pb-40 px-4 md:px-8 border-t border-dark-green">
			<div class="text-center md:px-8 max-w-full md:max-w-screen-md mx-auto">
				<h2 class="title-section text-green"><?php esc_html_e( 'Verwandte Beiträge', 'brister' ); ?></h2>
			</div>
			<div class="blog-grid w-full grid grid-cols-1 lg:grid-cols-12 gap-8">
				<?php
				while ( $related_posts_by_tag->have_posts() ) :
					$related_posts_by_tag->the_post();
					get_template_part( 'template-parts/components/card', 'blog' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</aside>
		<?php
	endif;
elseif ( $post_categories ) :
	foreach ( $post_categories as $post_category ) :
		$post_categories_ids[] = $post_category->term_id;
	endforeach;
	// Args to query related posts by category if no related posts by tag are found.
	$args_by_category = array(
		'post__not_in'     => array( get_the_ID() ),
		'posts_per_page'   => 3,
		'category__in'     => $post_categories_ids,
		'category__not_in' => array( 0 ),
		'orderby'          => 'date', // Display related posts by the most recent.
		'order'            => 'DESC', // Display related posts in descending order (most recent first).
	);

	// If no related posts by tag are found, query for related posts by category.
	$related_posts_by_category = new WP_Query( $args_by_category );

	if ( $related_posts_by_category->have_posts() ) :
		?>
		<aside class="related-posts pt-20 md:pt-36 pb-24 md:pb-40 px-4 md:px-8">
			<div class="text-center md:px-8 max-w-full md:max-w-screen-md mx-auto">
				<h2 class="title-section text-green"><?php esc_html_e( 'Related', 'brister' ); ?></h2>
			</div>
			<div class="blog-grid w-full grid grid-cols-1 lg:grid-cols-12 gap-8">
				<?php
				while ( $related_posts_by_category->have_posts() ) :
					$related_posts_by_category->the_post();
					get_template_part( 'template-parts/components/card', 'blog' );
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</aside>
		<?php
	endif;
endif;
