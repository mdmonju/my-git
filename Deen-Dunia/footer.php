<!-- Footer -->

	<footer class="footer">
		<div class="container">

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<a href="<?php echo site_url('/home');?>"><img width="100%;" src="<?php echo get_template_directory_uri();?>/my-folder/dd-logo.png" alt=""></a>
							</div>
						</div>
					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
						
						
						<?php
				
							wp_nav_menu(array(
								'theme_location'  => 'primary',
								'container' 	  => 'div',
								'container_class' => 'footer_column_content',
								'menu_class'	  => 'footer_menu',
							));
				
				
						?>
							
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="<?php echo site_url('/masik-deen-dunia');?>">Masik Deen Dunia</a></li>
								<li class="footer_list_item"><a href="<?php echo site_url('/shishu-kishor-deen-dunia');?>">Masik Shishu Kishor Deen Dunia</a></li>
								<li class="footer_list_item"><a href="<?php echo site_url('/BOOKS');?>">Published Books</a></li>
								<li class="footer_list_item"><a href="<?php echo site_url('/upcoming-books');?>">Upcoming Books</a></li>
								<li class="footer_list_item"><a href="<?php echo site_url('/collect-our-books');?>">Collect Our Books</a></li>
								<li class="footer_list_item"><a href="<?php echo site_url('/buy-monthly-deen-dunia') ?>">Buy Monthly Deen Dunia</a></li>
								<li class="footer_list_item"><a href="<?php echo site_url('/about-editor');?>">About Editor</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="<?php echo get_template_directory_uri();?>/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									The Monthly Deen Dunia, Baitus Sharaf complex, Dhanialapara D.T Road, Chattogram-4100, Bangladesh.
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="<?php echo get_template_directory_uri();?>/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									01822535995 , 01674450004
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="<?php echo get_template_directory_uri();?>/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									jafardeendunia@gamil.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script>  by <a href="https://colorlib.com" target="_blank">deendunia.com</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="https://www.facebook.com/themonthlydeendunia"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<?php wp_footer();?>
</body>
</html>