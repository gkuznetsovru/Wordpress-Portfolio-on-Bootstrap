<?php
		wp_nav_menu( array(
			'menu'          	=> 'primary',
			'theme_location'	=> 'primary',
			'depth'         	=> 2,
			'container'			=> false,
			'menu_class'    	=> 'nav nav-pills bg-dark text-dark',
			'fallback_cb'   	=> 'bs4navwalker::fallback',
			'walker'         	=> new bs4navwalker())
		
		);
		?>
