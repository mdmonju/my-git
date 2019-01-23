<section id="menu"> 
		<div class="container"> 
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <div class="menu-responsive"> 
					<?php echo do_shortcode('[responsive_menu]'); ?>
				  </div>
				  <div class="collapse navbar-collapse" id="navbarNavDropdown">
					
					<?php
				
				wp_nav_menu(array(
					'theme_location'  => 'primary',
					'container' 	  => 'div',
					'container_class' => 'navbar-collapse collapse align-left',
					'menu_class'	  => 'nav navbar-nav',
					'depth' 		  =>  5,
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(), 
				));
				
				
				?>
					
			  </div>
			</nav>
		</div>
	</section>