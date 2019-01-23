<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/courses_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>Our Library</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			

			<div class="row course_boxes">
				  
				<?php 
					if(have_posts()):while(have_posts()):the_post(); ?>
				 
				  
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
							<div class="card-text"><?php echo wp_trim_words(get_the_content(),6);?></div>
						</div>
						<div class="library_location">
							<p><?php the_field('library_location');?></p>
						</div>
					</div>
				</div>

				<?php
					endwhile; endif;
					
				?>



			</div>
		</div>		
	</div>

	<!-- Footer -->
<?php get_footer();?>