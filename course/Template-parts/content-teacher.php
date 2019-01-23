
<div class="col-lg-8">
<div class="teacher">
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
</div>
