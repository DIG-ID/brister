<header id="header-main" class="header-main--simple w-full fixed top-0 z-10" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main px-4 md:px-8 py-4 md:py-6" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'brister' ); ?>">
		<div class="main-header-content flex lg:columns-2 justify-center lg:justify-between">


			<div class="site-branding">
				<?php
				if ( is_front_page() ) :
					echo '<h1 class="screen-reader-text">' . get_bloginfo( 'name' ) . '</h1>';
				else :
					echo '<p class="screen-reader-text">' . get_bloginfo( 'name' ) . '</p>';
				endif;
				?>
				<span class="navbar-brand custom-logo-link "><?php do_action( 'theme_logo' ); ?></span>
			</div>


			<div class="cta-buttons lg:flex items-center gap-3 hidden invisible md:visible">
				<?php
				$link_shop = get_field( 'cta_buttons_got_to_shop', 'options' );
				if ( $link_shop ) :
					$link_url    = $link_shop['url'];
					$link_title  = $link_shop['title'];
					$link_target = $link_shop['target'] ? $link_shop['target'] : '_self';
					?>
					<a class="btn btn--primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php echo esc_html( $link_title ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
							<path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
					<?php
				endif;
				?>
			</div>
		</div>

	</nav>
</header>
