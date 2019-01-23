<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/courses_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>Courses</h1>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Courses</h1>
					</div>
				</div>
			</div>

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
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_image">
								<?php echo get_avatar(get_the_author_meta('ID'),100);?>
							</div>
							<div class="course_author_name"><?php the_author_posts_link();?>, <span>Author</span></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center">
							<span>৳<?php $price = get_field('course_price'); ?>
							<?php echo number_format($price, 0); ?></span></div>
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