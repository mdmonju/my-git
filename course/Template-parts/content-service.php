
	<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
		<div class="icon_container d-flex flex-column justify-content-end">
			<a href="<?php the_permalink();?>"><?php the_field('icon');?></a>
		</div>
		<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
		<p><a href="<?php the_permalink();?>"></a><?php echo wp_trim_words(get_the_content(),20);?></p>
	</div>
