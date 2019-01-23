<?php

get_header();

while(have_posts()){
	the_post(); 
	
		pageBanner();
	
	?>

  <div class="container container--narrow page-section">		
			<div class="metabox metabox--position-up metabox--with-home-link">
			  <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program');?>"><i class="fa fa-home" aria-hidden="true"></i> All Programs</a> <span class="metabox__main"><?php the_title();?></span></p>
			</div>
	<div class="generic-content">
      <p><?php the_content();?></p>
    </div>
	
	<?php 
	
			$relatedProfessors= new wp_Query(array(
					'post_type' => 'professor',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC',
					'meta_query' => array(
						array(
							'key' => 'related_programs',
							'compare' => 'LIKE',
							'value' => '"' . get_the_ID() . '"'
						)
					)
					
				));
			
				if ($relatedProfessors->have_posts()){
					echo  '<hr class="section-break" />';
					echo  '<h2 style="margin-bottom:40px;" class="headline headline--medium"> ' . get_the_title() . ' Teacher(s)</h2>';
			
			if($relatedProfessors->have_posts()): 
			while($relatedProfessors->have_posts()):
			$relatedProfessors->the_post(); ?>
			
			<ul class="professor-cards">
				<li class="professor-card__list-item">
					<a class="professor-card" href="<?php the_permalink();?>">
						<img src="<?php the_post_thumbnail_url()?>" alt="" class="professor-card__image" />
						<span class="professor-card__name">
							<?php the_title();?>
						</span>
					</a>
				</li>
			</ul>
			<?php 
				endwhile; endif;
				}
	
					wp_reset_postdata();
	
				$today = date('Ymd');
				$homepageEvent= new wp_Query(array(
					'post_type' => 'event',
					'posts_per_page' => 2,
					'meta_key' => 'event_date',
					'orderby' => 'meta_value_num',
					'order' => 'ASC',
					'meta_query' => array(
						array(
							'key' => 'event_date',
							'compare' => '>=',
							'value' => $today,
							'type' => 'numeric'
						),
						array(
							'key' => 'related_programs',
							'compare' => 'LIKE',
							'value' => '"' . get_the_ID() . '"'
						)
					)
					
				));
			
				if ($homepageEvent->have_posts()){
					echo  '<hr class="section-break" />';
					echo  '<h2 style="margin-bottom:40px;" class="headline headline--medium">Upcoming ' . get_the_title() . ' Event(s)</h2>';
			
			if($homepageEvent->have_posts()): 
			while($homepageEvent->have_posts()):
			$homepageEvent->the_post(); 
			
			get_template_part('template-part/event-summery');
			
				endwhile; endif;
				}
			?>
	
	
   </div> 
			
	



	<?php }


get_footer();


?>