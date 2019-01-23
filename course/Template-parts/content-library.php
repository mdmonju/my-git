
<div class="col-lg-8">
<div class="course_box">
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
</div>
