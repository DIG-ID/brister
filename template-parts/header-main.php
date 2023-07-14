<header id="header-main" class="header-main w-full fixed top-0" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'chasseral' ); ?>">
		<div class="main-header-content">
			<button class="main-menu-toggle">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>
			<div class="w-1/2 md:border-r border-solid border-black flex">
				<?php has_custom_logo() ? the_custom_logo() : ''; ?>
			</div>
			<div class="navigation-buttons">
				<button>contact</button>
				<button>shot</button>
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
