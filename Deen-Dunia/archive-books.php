<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;position:relative">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/courses_background.jpg')?>)">
			</div>
		</div>
		<div class="home_content">
			<h1>Books</h1>
		</div>
	</div>
			
	<!-- Popular -->
	
	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
				
				<div class="Collect-our-Books Our-upcoming-books">
					<a href="<?php echo site_url('/upcoming-books');?>"><h3>Upcoming Books</h3></a>
					<a href="<?php echo site_url('/collect-our-books');?>"><h3>Collect Our Books</h3></a>
				</div>
					<div class="section_title text-center"style="margin-top:10px;">
						<h1>Our Published Books</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				  
				<?php 
				
				$books = new wp_Query(array(
					'post_type' => 'books',
					'posts_per_page' => -1,
					'category__not_in' => array(6),
				));
				
					if($books->have_posts()):while($books->have_posts()):$books->the_post(); ?>
				 
				  
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<div class="course_author_name"><?php the_field('book_author');?></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center">
							<span>৳<?php $price = get_field('book_price'); ?>
							<?php echo number_format($price, 0); ?></span></div>
						</div>
					</div>
				</div>

				<?php
					endwhile; 
					endif;
					
				?>
			</div>
		</div>		
	</div>

	<!-- Footer -->
<?php get_footer();?>