<!-- Header -->
<?php get_header();?>
<!-- slider -->
<?php get_template_part('slider');?>


	<!-- Latest Posts -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Latest Posts</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">


			<?php 
				$homeblog= new wp_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 3,
				));
			
				if($homeblog->have_posts()):
				while($homeblog->have_posts()):
				$homeblog->the_post(); ?>
			
			
			<!-- Event Item -->
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day"><?php 
										echo get_the_date('d');
										?>	
									</div>
									<div class="event_month"><?php 
										echo get_the_date('F');
										?>
									</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="<?php the_permalink();?>"><?php the_title();?></a></div>
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
			else: echo'<h1 style="color:red;font-size:50px;text-align:center;">No Post Found</h1>';
			endif;
			
			?>

			</div>
				<div class="all-elements" style="margin-top:100px;">
					<a href="<?php echo site_url('/news');?>">View All Posts</a>
				</div>
		</div>
	</div>

	
	<!-- Books -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Books</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<?php 
								
								$our_books = new WP_Query(array(
								
								'post_type' => 'books',
								'posts_per_page' => 3,
								
								));
								
								if($our_books->have_posts()): 
								while($our_books->have_posts()):$our_books->the_post();
								
								?>
				
				
				<!-- our book Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
						<div class="card-body text-center">
							<div class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
							<div class="card-text"><?php echo wp_trim_words(get_the_content(),6);?></div>
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
				<div class="all-elements" style="margin-top:100px;">
					<a href="<?php echo site_url('/BOOKS');?>">View All Books</a>
				</div>
		</div>		
	</div>
	


	<!-- Monthly deen dunia -->
	
	<div class="section_title text-center" style="margin-bottom:100px;">
		<h1>Masik Deen Dunia</h1>
	</div>
	
	<div class="register" style="padding-bottom:117px;">
		<?php 
				$recentMonth = date('Ymd');
				$masikdeendunia = new wp_Query(array(
					'post_type' => 'masik-deen-dunia',
					'posts_per_page' => 1,
					'meta_key' => 'deen_dunia_published_month',
					'orderby' => 'meta_value_num',
					'order' => 'DES',
					'meta_query' => array(
						array(
							'key' => 'deen_dunia_published_month',
							'compare' => '<=',
							'value' => $recentMonth,
						)
					)
				));
				
					if($masikdeendunia->have_posts()):while($masikdeendunia->have_posts()):$masikdeendunia->the_post(); ?>
					
		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Masik deen dunia cover image -->
					
					<div class="deen-dunia-newspaper">
						<div class="card">
							<div class="card_img">
								<div class="card_plus trans_200 text-center"><a href="<?php echo site_url('/buy-monthly-deen-dunia') ?>">Buy</a></div>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Masik deen dunia content image -->

					<div class="deen-dunia-newspaper">
						<div class="card">
							<div class="card_img">
								<div class="card_plus trans_200 text-center"><a href="<?php echo site_url('/buy-monthly-deen-dunia') ?>">Buy</a></div>
								<a href="<?php the_permalink(); ?>"><?php echo do_shortcode('[kdmfi_featured_image id="featured-image-2" size="full"]'); ?></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
		<?php endwhile;
			  endif;
		?>
			<div class="all-elements" style="margin-top:100px;">
					<a href="<?php echo site_url('/masik-deen-dunia');?>">View All Masik Deen Dunia</a>
			</div>
	</div>

		<!--Masik Shishu Kishor deen dunia deen dunia -->
	
	<div class="section_title text-center" style="margin-bottom:100px;">
		<h1>Shishu kishor Deen Dunia</h1>
	</div>
	
	<div class="register" style="padding-bottom:117px;">

		<div class="container-fluid">
			
				<?php 
				$recentMonth = date('Ymd');
				$kishorDeenDunia = new wp_Query(array(
					'post_type' => 'Kishor-Deen-Dunia',
					'posts_per_page' => 1,
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
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Masik deen dunia cover image -->
					
					<div class="deen-dunia-newspaper">
						<div class="card">
							<div class="card_img">
								<div class="card_plus trans_200 text-center"><a href="<?php echo site_url('/buy-monthly-deen-dunia') ?>">Buy</a></div>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Masik deen dunia content image -->

					<div class="deen-dunia-newspaper">
						<div class="card">
							<div class="card_img">
								<div class="card_plus trans_200 text-center"><a href="<?php echo site_url('/buy-monthly-deen-dunia') ?>">Buy</a></div>
								<a href="<?php the_permalink(); ?>"><?php echo do_shortcode('[kdmfi_featured_image id="featured-image-2" size="full"]'); ?></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
		<?php endwhile;
			  endif;
		?>
		<div class="all-elements" style="margin-top:100px;">
					<a href="<?php echo site_url('/shishu-kishor-deen-dunia');?>">View All Shishu Kishor Deen Dunia</a>
		</div>
	</div>

	


	<?php get_footer();?>