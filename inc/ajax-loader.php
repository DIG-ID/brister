<?php
add_action( 'wp_ajax_brister_blog_load_posts', 'brister_blog_load_posts' );
add_action( 'wp_ajax_nopriv_brister_blog_load_posts', 'brister_blog_load_posts' );

function brister_blog_load_posts() {

	// Verify nonce
	$nonce = $_POST['nonce'];
	if ( ! wp_verify_nonce( $nonce, 'brister_blog_load_posts_nonce' ) ) {
		wp_send_json_error( 'Invalid nonce.' );
	}

	$msg           = '';
	$pag_container = '';

	if ( isset( $_POST['data']['page'] ) ) :
		$page         = absint( $_POST['data']['page'] ); // The page we are currently at
		$blog_cat     = sanitize_text_field( $_POST['data']['blog_cat'] );
		$search_text  = sanitize_text_field( $_POST['data']['search'] );
		$cur_page     = $page;
		$page        -= 1;
		$per_page     = 6; // Number of items to display per page
		$previous_btn = false;
		$next_btn     = true;
		$first_btn    = true;
		$last_btn     = true;
		$start        = $page * $per_page;

		if ( $blog_cat && ! term_exists( $blog_cat, 'category' ) ) :
			wp_send_json_error( 'Invalid category.' );
		endif;

		if ( $search_text ) :
			$search_text = wp_unslash( $search_text );
			if ( strlen( $search_text ) < 2 ) :
				wp_send_json_error( 'Search text must be at least 3 characters.' );
			endif;
		endif;

		$args = array(
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'posts_per_page'   => $per_page,
			'offset'           => $start,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'category__not_in' => array( 1 ),
		);

		$count_args = array(
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'posts_per_page'   => -1,
			'category__not_in' => array( 1 ),
		);

		if ( $blog_cat ) :
			$args['category_name']       = $blog_cat;
			$count_args['category_name'] = $blog_cat;
		endif;

		if ( $search_text ) :
			$args['s']       = $search_text;
			$count_args['s'] = $search_text;
		endif;

		$count = new WP_Query( $count_args );
		// Loop into all the posts to cout them
		if ( $count->have_posts() ) :
			$count = $count->post_count;
			wp_reset_postdata();
		else :
			$count = 0;
		endif;

		$all_blog_posts = new WP_Query( $args );
		// Loop into all the posts
		if ( $all_blog_posts->have_posts() ) :
			while ( $all_blog_posts->have_posts() ) :
				$all_blog_posts->the_post();

				$msg .= '<article id="post-' . get_the_ID() . '" class="' . implode( ' ', get_post_class( 'card-blog lg:col-span-1 w-full flex flex-col rounded-3xl overflow-hidden bg-white mb-8 text-start border border-light-green ' ) ) . '">';
				$msg .= '<figure class="relative">';
				$msg .= '<a href="' . get_the_permalink() . '">' . get_the_post_thumbnail( get_the_ID(), 'full', array( 'class' => 'object-cover' ) ) . '</a>';
				$msg .= '<span class="absolute top-4 left-4 bg-green text-light-green font-sans text-xs uppercase rounded-full py-2 px-5">';

				$categories = get_the_category();
				if ( $categories ) :
					$msg .= esc_html( $categories[0]->name );
				endif;

				$msg .= '</span></figure><div class="card-blog__content px-6 py-8">';
				$msg .= '<span class="flex items-center gap-2 font-sans text-sm text-green mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none"><path d="M8.5 2V5M16.5 2V5M4 9.09H21M21.5 8.5V17C21.5 20 20 22 16.5 22H8.5C5 22 3.5 20 3.5 17V8.5C3.5 5.5 5 3.5 8.5 3.5H16.5C20 3.5 21.5 5.5 21.5 8.5Z" stroke="#10664F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.1949 13.7002H16.2039M16.1949 16.7002H16.2039M12.4949 13.7002H12.5049M12.4949 16.7002H12.5049M8.79395 13.7002H8.80395M8.79395 16.7002H8.80395" stroke="#10664F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>' . get_the_date() . '</span>';
				$msg .= '<a class="transition-all duration-300 ease-in-out hover:text-lime-green" href="' . get_the_permalink() . '"><h3 class="font-sans font-bold text-2xl text-dark-green  mb-6 line-clamp-2 transition-all duration-300 ease-in-out hover:text-green">' . get_the_title() . '</h3></a>';
				$msg .= '<p class="font-sans font-medium text-base text-dark-green leading-6 mb-6">' . get_field( 'position' ) . '</p>';
				$msg .= '<a class="btn display inline-flex items-center gap-2 font-medium text-base underline underline-offset-4 transition-all duration-300 ease-in hover:text-green hover:font-semibold" href="' . get_the_permalink() . '">' . esc_html__( 'Weiterlesen', 'brister' ) . '<svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none"><path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg></a>';
				$msg .= '</div></article>';

			endwhile;
			wp_reset_postdata();
		else :
			$msg .= '<div class="col-span-12 text-center"><p class="warning text-body text-center text-base">' . __( 'Es wurden keine Veröffentlichungen gefunden, die Ihren Suchkriterien entsprechen.', 'brister' ) . '</p></div>';
		endif;

		$msg = '<div class="brister-blog-content w-full grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-8">' . $msg . '</div>';

		$no_of_paginations = ceil( $count / $per_page );

		if ( $cur_page >= 7 ) :
			$start_loop = $cur_page - 3;
			if ( $no_of_paginations > $cur_page + 3 ) :
				$end_loop = $cur_page + 3;
			elseif ( $cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6 ) :
				$start_loop = $no_of_paginations - 6;
				$end_loop   = $no_of_paginations;
			else :
				$end_loop = $no_of_paginations;
			endif;
		else :
			$start_loop = 1;
			if ( $no_of_paginations > 7 ) :
				$end_loop = 7;
			else :
				$end_loop = $no_of_paginations;
			endif;
		endif;

		$pag_container .= '<ul class="brister-blog-pagination">';

		if ( $previous_btn && $cur_page > 1 ) :
			$pre = $cur_page - 1;
			$pag_container .= "<li p='$pre' class='active'> < </li>";
		elseif ( $previous_btn && $no_of_paginations > 1 ) :
			$pag_container .= "<li class='inactive'> < </li>";
		endif;

		for ( $i = $start_loop; $i <= $end_loop; $i++ ) :
			if ( $cur_page === $i ) :
				$pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
			else :
				$pag_container .= "<li p='$i' class='active'>{$i}</li>";
			endif;
		endfor;

		if ( $next_btn && $cur_page < $no_of_paginations ) :
			$nex = $cur_page + 1;
			$pag_container .= "<li p='$nex' class='active brister-blog-next-page'> > </li>";
		elseif ( $next_btn && $no_of_paginations > 1) :
			$pag_container .= "<li class='inactive'> > </li>";
		endif;

		$pag_container = $pag_container . '</ul>';

		//echo wp_kses_post( $msg );
		//echo '<div class = "brister-blog-pagination-nav">' . $pag_container . '</div>';

		wp_send_json(
			array(
				'msg' => $msg,
				'pagination' => $pag_container
			)
		);

	else :
		wp_send_json_error( 'Invalid request.' );
	endif;

	exit();

}
?>
