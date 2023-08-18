<section class="section-teams w-full py-10 lg:py-32 px-4 lg:px-8 grid grid-cols-1 lg:grid-cols-12 lg:gap-4 relative">

	<?php
	if ( have_rows( 'team_team_members' ) ) :
		echo '<div class="lg:col-start-3 xl:col-start-5 lg:col-span-8 xl:col-span-4 flex flex-col lg:flex-row items-center lg:gap-8 py-16">';
		while ( have_rows( 'team_team_members' ) ) :
			the_row();
			$member_img = get_sub_field( 'image' );
			?>
				<div class="team-member lg:p-4 mb-20 lg:mb-0">
					<figure class="relative mb-6 after:content-[''] after:block after:absolute after:bottom-4 after:left-4 after:border-4 after:border-green after:w-full after:h-full after:rounded-tr-3xl after:rounded-br-3xl after:rounded-bl-3xl">
						<?php echo wp_get_attachment_image( $member_img, 'full', false, array( 'class' => 'w-full max-w-full object-cover rounded-tr-3xl max-h-[300px] md:max-h-[500px] rounded-br-3xl rounded-bl-3xl' ) ); ?>
					</figure>
					<div class="team-member-quote flex mb-6">
						<svg xmlns="http://www.w3.org/2000/svg" width="36" height="29" viewBox="0 0 36 29" fill="none" class="mr-4"><path d="M13.8 0V6.532C8.74 7.268 6.716 10.764 6.716 14.536H14.444V28.888H0V15.64C0 6.44 5.612 0.919999 13.8 0ZM34.96 0V6.532C29.9 7.268 27.968 10.764 27.968 14.536H35.696V28.888H21.16V15.64C21.16 6.44 26.772 0.919999 34.96 0Z" fill="#10664F"/></svg>
						<blockquote class="font-sans text-lg text-light-green leading-8"><?php the_sub_field( 'quote' ); ?></blockquote>
					</div>


					<p class="font-montbold text-base lg:text-xl uppercase text-lime-green"><?php the_sub_field( 'name' ); ?></p>
					<p class="font-sans font-light text-xs lg:text-xl text-light-green uppercase mb-6"><?php the_sub_field( 'position' ); ?></p>

					<?php
					$member_phone = get_sub_field( 'phone' );
					$clean_member_phone = str_replace( ' ', '', $member_phone );
					if ( $member_phone ) :
						?><a class="font-sans text-base text-light-green mb-2 transition-all duration-300 ease-in-out hover:text-lime-green hover:underline underline-offset-4 flex items-center" href="tel:<?php echo esc_attr( $clean_member_phone ); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="mr-2"><path d="M14.4805 12.1145C14.4805 12.3485 14.4285 12.589 14.318 12.823C14.2075 13.057 14.0645 13.278 13.876 13.486C13.5575 13.837 13.2065 14.0905 12.81 14.253C12.42 14.4155 11.9975 14.5 11.5425 14.5C10.8795 14.5 10.171 14.344 9.4235 14.0255C8.676 13.707 7.9285 13.278 7.1875 12.7385C6.43227 12.1861 5.7196 11.5777 5.0555 10.9185C4.3982 10.2568 3.79196 9.54627 3.242 8.793C2.709 8.052 2.28 7.311 1.968 6.5765C1.656 5.8355 1.5 5.127 1.5 4.451C1.5 4.009 1.578 3.5865 1.734 3.1965C1.89 2.8 2.137 2.436 2.4815 2.111C2.8975 1.7015 3.3525 1.5 3.8335 1.5C4.0155 1.5 4.1975 1.539 4.36 1.617C4.529 1.695 4.6785 1.812 4.7955 1.981L6.3035 4.1065C6.4205 4.269 6.505 4.4185 6.5635 4.5615C6.622 4.698 6.6545 4.8345 6.6545 4.958C6.6545 5.114 6.609 5.27 6.518 5.4195C6.4335 5.569 6.31 5.725 6.154 5.881L5.66 6.3945C5.5885 6.466 5.556 6.5505 5.556 6.6545C5.556 6.7065 5.5625 6.752 5.5755 6.804C5.595 6.856 5.6145 6.895 5.6275 6.934C5.7445 7.1485 5.946 7.428 6.232 7.766C6.5245 8.104 6.8365 8.4485 7.1745 8.793C7.5255 9.1375 7.8635 9.456 8.208 9.7485C8.546 10.0345 8.8255 10.2295 9.0465 10.3465C9.079 10.3595 9.118 10.379 9.1635 10.3985C9.2155 10.418 9.2675 10.4245 9.326 10.4245C9.4365 10.4245 9.521 10.3855 9.5925 10.314L10.0865 9.8265C10.249 9.664 10.405 9.5405 10.5545 9.4625C10.704 9.3715 10.8535 9.326 11.016 9.326C11.1395 9.326 11.2695 9.352 11.4125 9.4105C11.5555 9.469 11.705 9.5535 11.8675 9.664L14.019 11.1915C14.188 11.3085 14.305 11.445 14.3765 11.6075C14.4415 11.77 14.4805 11.9325 14.4805 12.1145Z" stroke="#E6EADC" stroke-miterlimit="10"/></svg> <?php echo $member_phone; ?></a>
						<?php
					endif;
					$email = get_sub_field( 'email' );
					if ( $email ) :
						?><a class="font-sans text-base text-light-green transition-all duration-300 ease-in-out hover:text-lime-green hover:underline underline-offset-4 flex items-center" href="mailto:<?php echo esc_attr( $email ); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="mr-2"><path d="M11.25 13.5249H4.75C2.8 13.5249 1.5 12.5499 1.5 10.2749V5.72485C1.5 3.44985 2.8 2.47485 4.75 2.47485H11.25C13.2 2.47485 14.5 3.44985 14.5 5.72485V10.2749C14.5 12.5499 13.2 13.5249 11.25 13.5249Z" stroke="#E6EADC" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.25 6.05005L9.2155 7.67505C8.546 8.20805 7.4475 8.20805 6.778 7.67505L4.75 6.05005" stroke="#E6EADC" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg> <?php echo $email; ?></a><?php
					endif;
					?>
				</div>
			<?php
		endwhile;
		echo '</div>';
	endif;
	?>
</section>