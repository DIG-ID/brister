<footer class="footer-main">
	<div class="w-full py-24 px-8 border-t border-dark-green">
		<div class="w-full mb-8">
			<?php do_action( 'theme_logo' ); ?>
		</div>
		<div class="w-full grid grid-cols-12 gap-4">
			<div class="col-span-2">
				info
			</div>
			<div class="col-start-5 col-span-4">
				newsletter
			</div>
			<div class="col-start-9 col-span-2">
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
			<div class="col-span-2">
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
	</div>

	<div class="w-full px-8 py-5 flex justify-between items-center border-t border-dark-green">
		<p class="font-sans text-xs text-dark-green">
			<?php
			$y = date( 'Y' );
			printf(
				esc_html__( 'Urheberrecht &copy; %d Brister', 'brister' ),
				esc_html( $y )
			);
			?>
		</p>
		<p class="font-sans text-xs text-dark-green">
			<?php
			printf(
				__( 'Developed by: <a href="%s">dig.id</a>', 'brister' ),
				esc_url( 'https://dig.id' )
			);
			?>
		</p>
	</div>
</footer>