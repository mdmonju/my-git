<?php get_header();?>
	
	<!-- Home -->

	<div class="home"style="height: 447px;">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/teachers_background.jpg')?>)"></div>
		</div>
		<div class="home_content">
			<h1>Teachers</h1>
		</div>
	</div>

	<!-- Teachers -->

	<div class="teachers page_section">
		<div class="container">
			<div class="row">
				<?php
				
				
					if(have_posts()):
					while(have_posts()):
					the_post();?>
					
				<!-- Teacher -->
				<div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
						</div>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
							<div class="card-text"><?php the_field('teachers_subject');?></div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile;
				  endif;
			?>
			</div>
		</div>
	</div>

	<!-- Become -->

	<div class="become">
		<div class="container">
			<div class="row row-eq-height">

			<?php 
					$args = array (
					'p' => 1575,
					'post_type' => 'page',
					);
					$becomeTeacher = get_posts( $args );
					foreach( $becomeTeacher as $post ) :	setup_postdata($post);
				 ?>

				<div class="col-lg-6 order-2 order-lg-1">
					<div class="become_title">
						<h1><?php the_title();?></h1>
					</div>
					<p class="become_text"><?php if(has_excerpt()){
										echo get_the_excerpt();
									}else{
										echo wp_trim_words(get_the_content(),100);
									}
									?>
					</p>
					<div class="become_button text-center trans_200">
						<a href="<?php the_permalink();?>">Read More</a>
					</div>
				</div>

				<div class="col-lg-6 order-1 order-lg-2">
					<div class="become_image">
						<?php the_post_thumbnail();?>
					</div>
				</div>
				
				<?php endforeach; ?>
				
			</div>
		</div>
	</div>

	<!-- Footer -->

<?php get_footer();?>
