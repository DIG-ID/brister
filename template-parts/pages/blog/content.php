<section class="brister-blog-grid pt-14 pb-32 px-4 lg:px-8">

	<div class="flex flex-col lg:flex-row items-center justify-center pb-14">
		<div class="brister-blog-filters flex justify-around mb-4 lg:mb-0 w-full lg:w-auto">
			<button class="brister-blog-filters-buttons active" data-filter="*"><?php esc_html_e( 'Alle', 'brister' ); ?></button>
			<?php
			foreach ( get_categories( array( 'exclude' => array( 1 ) ) ) as $category ) :
				echo '<button class="brister-blog-filters-buttons" data-category="' . esc_attr( $category->slug ) . '">' . esc_html( $category->name ) . '</button>';
			endforeach;
			?>
		</div>
		<div class="brister-blog-filters-search-wrapper">
			<input class="brister-blog-filters-search" type="text" placeholder="Suchen">
		</div>
	</div>

	<div class="brister-blog-grid-wrapper relative">
		<div class="brister-blog-container w-full"></div>
		<span class="brister-blog-stage absolute top-0 left-0 right-0 bottom-0 bg-white flex items-center justify-center overflow-hidden z-20"></span>
		<div class="brister-blog-pagination-nav flex items-center justify-center pt-6"></div>
	</div>

	<form class="brister-blog-list"><input type="hidden" value="" class="brister-blog-hidden-form"/></form>
</section>

