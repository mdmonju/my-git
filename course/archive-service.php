<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/courses_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>Services</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Services</h1>
					</div>
				</div>
			</div>

		  <div class="row services_row">
				<?php 
					if(have_posts()):while(have_posts()):the_post(); ?>
					
				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<a href="<?php the_permalink();?>"><?php the_field('icon');?></a>
					</div>
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<p><a href="<?php the_permalink();?>"></a><?php echo wp_trim_words(get_the_content(),20);?></p>
				</div>
				
				<?php
					endwhile; endif;
					
				?>
			</div>
		</div>		
	</div>

	<!-- Footer -->
<?php get_footer();?>