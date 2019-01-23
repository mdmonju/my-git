
<div class="col-lg-8">
<div class=" course_box">
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
</div>	

			