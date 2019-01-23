<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<title><?php bloginfo('name');?></title>
<meta charset="<?php bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="site-header__util">
          <?php if(is_user_logged_in()) { ?>
			<a  href="<?php echo esc_url(site_url('/my-notes')); ?>" class="btn btn--small  btn--dark-orange float-left">My Notes</a>
            <a href="<?php echo wp_logout_url();  ?>" class="btn btn--small  btn--dark-orange float-left btn--with-photo">
            <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
            <span class="btn__text">Log Out</span>
            </a>
            <?php } else { ?>
              <a href="<?php echo wp_login_url(); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
              <a href="<?php echo wp_registration_url(); ?>" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
             <?php } ?>
        </div>
<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
					<span><a href="<?php echo site_url();?>">course</a></span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
			
			<?php
				
				wp_nav_menu(array(
					'theme_location'  => 'primary',
					'container' 	  => 'div',
					'container_class' => 'main_nav',
					'menu_class'	  => 'main_nav_list',
					'depth' 		  =>  3,
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				));
				
				
				?>
			</nav>
		</div>
		<a style="color:#989898;" href="<?php echo site_url('/search');?>" class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></a>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="<?php echo get_template_directory_uri();?>/images/phone-call.svg" alt="">
			<span>+43 4566 7788 2457</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	