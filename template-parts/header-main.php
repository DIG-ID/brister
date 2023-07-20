<header id="header-main" class="header-main w-full fixed top-0 z-10" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main px-4 md:px-8  md:py-6" role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'brister' ); ?>">
		<div class="main-header-content flex columns-2 justify-between">
			<div class="flex items-center gap-3">
				<button class="main-menu-toggle">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
				<div class="site-branding">
					<?php
					if ( is_front_page() ) :
						echo '<h1 class="screen-reader-text">' . get_bloginfo( 'name' ) . '</h1>';
					else :
						echo '<p class="screen-reader-text">' . get_bloginfo( 'name' ) . '</p>';
					endif;
					?>
					<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link "><?php do_action( 'theme_logo' ); ?></a>
				</div>
			</div>

			<div class="cta-buttons flex items-center gap-3 invisible md:visible">
				<a class="btn btn--secondary" href="">
					<?php esc_html_e( 'Contact sales', 'brister' ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
						<path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
				<a class="btn btn--primary" href="">
					<?php esc_html_e( 'Go to shop', 'brister' ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10" fill="none">
						<path d="M1.5 8.89999L5.17453 5.60706C5.60849 5.21818 5.60849 4.58181 5.17453 4.19292L1.5 0.899994" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</a>
			</div>
		</div>

		<div class="main-menu-wrapper">
			<div class="main-menu-content">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main',
						'container'      => false,
						'menu_class'     => 'main-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'    => '__return_false',
					),
				);
				?>
			</div>
		</div>
	</nav>
</header>
