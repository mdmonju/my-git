<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height:447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/contact_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>Contact</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>

						<?php echo do_shortcode('[contact-form-7 id="1588" title="Course Contact Form"]');?>
						
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						<div class="about_title">Join Courses</div>
						<p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="<?php echo get_template_directory_uri();?>/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Arévalo
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="<?php echo get_template_directory_uri();?>/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="<?php echo get_template_directory_uri();?>/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@company.com
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- Footer -->
<?php get_footer();?>