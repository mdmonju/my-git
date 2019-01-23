<?php get_header();?>
	
	<!-- Home -->

	<div class="home" style="height: 447px;position:relative">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo get_theme_file_uri('/images/courses_background.jpg')?>)">
			</div>
		</div>
	</div>
			
	<!-- Popular -->
	
	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
				<div class="Collect-our-Books Our-upcoming-books">
					<a href="<?php echo site_url('/buy-monthly-deen-dunia');?>"><h3>Collect Shishu Kishor Deen Dunia</h3></a>
				</div>
				
					<div class="section_title text-center"style="margin-top:10px;">
						<h1>Shishu Kishor Deen Dunia</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				  
				<?php 
				$recentMonth = date('Ymd');
				$kishorDeenDunia = new wp_Query(array(
					'post_type' => 'Kishor-Deen-Dunia',
					'posts_per_page' => -1,
					'meta_key' => 'shishu_kishor_deen_dunia_published_month',
					'orderby' => 'meta_value_num',
					'order' => 'DES',
					'meta_query' => array(
						array(
							'key' => 'shishu_kishor_deen_dunia_published_month',
							'compare' => '<=',
							'value' => $recentMonth,
						)
					)
				));
				
					if($kishorDeenDunia->have_posts()):while($kishorDeenDunia->have_posts()):$kishorDeenDunia->the_post(); ?>
				 
				  
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card masik-deen-dunia-archive-card" style="background:#e8e8e8;">
					<div class="card-body masik-deen-dunia-archive-card-body text-center">
							<div class="card-title masik-deen-dunia-archive-card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
					</div>
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
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