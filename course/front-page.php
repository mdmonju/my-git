<!-- Header -->
<?php get_header();?>
<!-- slider -->
<?php get_template_part('slider');?>

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
								
								$popular_courses = new WP_Query(array(
								
								'post_type' => 'course',
								'posts_per_page' => 3,
								
								));
								
								if($popular_courses->have_posts()): 
								while($popular_courses->have_posts()):$popular_courses->the_post();
								
								?>
				
				
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
					endwhile;
					endif;
				?>
				
				
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Register now and get a discount <span>50%</span> discount until 1 January</h1>
							<p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(<?php echo get_theme_file_uri('/images/search_background.jpg')?>);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Search for your course</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree">
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">search course</button>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services page_section">
		
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
								
								$our_services = new WP_Query(array(
								
								'post_type' => 'service',
								'posts_per_page' => 6,
								
								));
								
								if($our_services->have_posts()): 
								while($our_services->have_posts()):$our_services->the_post();
								
								?>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<a href="<?php the_permalink();?>"><?php the_field('icon');?></a>
					</div>
					<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					<p><a href="<?php the_permalink();?>"></a><?php echo wp_trim_words(get_the_content(),20);?></p>
				</div>

				<?php  
					endwhile;
					endif;
				?>

			</div>
			
			<div class="all-elements"/>
				<a href="<?php echo site_url('/Services');?>">All Searvices</a>
			</div>
			
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/testimonials_background.jpg')?>)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our students say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="<?php echo get_template_directory_uri();?>/images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="<?php echo get_template_directory_uri();?>/images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="<?php echo get_template_directory_uri();?>/images/testimonials_user.jpg" alt="">
										</div>
										<div class="testimonial_name">james cooper</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Upcoming Events</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">


			<?php 
				$today = date('Ymd');
				$homepageEvent= new wp_Query(array(
					'post_type' => 'event',
					'posts_per_page' => 3,
					'meta_key' => 'event_date',
					'orderby' => 'meta_value_num',
					'order' => 'ASC',
					'meta_query' => array(
						array(
							'key' => 'event_date',
							'compare' => '>=',
							'value' => $today,
							'type' => 'numeric'
						)
					)
					
				));
			
				if($homepageEvent->have_posts()):
				while($homepageEvent->have_posts()):
				$homepageEvent->the_post(); ?>
			
			
			<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day"><?php 
										$eventDate = new DateTime(get_field('event_date'));
										echo $eventDate->format('d')
										?>	
									</div>
									<div class="event_month"><?php 
										echo $eventDate->format('F')
										?>
									</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="<?php the_permalink();?>"><?php the_title();?></a></div>
									<div class="event_location"><?php the_field('event_location');?></div>
									<p><?php if(has_excerpt()){
										echo get_the_excerpt();
									}else{
										echo wp_trim_words(get_the_content(),18);
									}
									
									?></p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<?php the_post_thumbnail();?>
								</div>
							</div>

						</div>	
					</div>
				</div>
			
			
			<?php 
			
			endwhile;
			else: echo'<h1 style="color:red;font-size:50px;text-align:center;">No upcoming Events Found</h1>';
			endif;
			
			?>

			</div>
				<div class="all-elements" style="margin-top:100px;">
					<a href="<?php echo site_url('/Events');?>">All Events</a>
				</div>
		</div>
	</div>

	<?php get_footer();?>