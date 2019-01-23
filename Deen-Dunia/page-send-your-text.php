<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<?php pagebanner(); ?>
		<div class="home_content">
			<h1>আপনার লেখা পাঠান</h1>
		</div>
	</div>

	<!-- send text -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- send your text Column -->

				<div class="col-lg-8">
					
					<?php echo do_shortcode('[contact-form-7 id="141" title="Send Your Text"]');?>

				</div>

				<!-- Sidebar Column -->
				<?php get_template_part('sidebar')?>
			</div>
		</div>
	</div>

	<!-- Footer -->
<?php get_footer();?>


