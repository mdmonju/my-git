<?php 

get_header(); 
	pageBanner(array(
		'title' => 'Programs',
		'subtitle' => "Don't forger to attend",
	));
?>

	
	<div class="container container--narrow page-section">
	
	<ul class="link-list min-list">
	
<?php 
		while(have_posts()){
			the_post(); ?>
			
			<li><a href="<?php  the_permalink();?>"><?php the_title();?></a></li>
			
		<?php }
		
		?>
	</ul>
	

	
	</div>


<?php 
get_footer();
?>