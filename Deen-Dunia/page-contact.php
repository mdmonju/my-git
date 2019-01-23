<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height:447px;">
		<?php pagebanner(); ?>
		<div class="home_content">
			<h1><?php echo get_the_title();?></h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title" style="margin-bottom:30px;">Contact Us</div>

						<?php echo do_shortcode('[contact-form-7 id="128" title="Deen Dunia Contact Form"]');?>
						
					</div>
						
				</div>

				<div class="col-lg-4">
					<!-- Contact information sidebar  (design purpose) -->
						<?php dynamic_sidebar('contactinformation'); ?>
				</div>

			</div>

		</div>
	</div>

	<!-- Footer -->
<?php get_footer();?>