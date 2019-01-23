<?php get_header();?>
		<nav id="menu"> 
			
			<?php 
			
			$args = array(
				'theme_location' => 'Primary'
			);
			
			wp_nav_menu($args);
			
			?>
		</nav>
		<div class="content_wrap" style="width:100%;>
		<article> 
			<div class="article_wrap floatleft "> 
			
			<div class="error" style="text-align:center; margin-top:50px;"> 
				<h1 style="font-size:200px;color:red;">404</h1>
				<h3 style="font-size:100px;">Not Found</h3>
				<p style="font-size:50px; margin-top:40px;">Visit <a href="<?php echo home_url(); ?>" style="font-size:70px; color:purple; font-weight:bold;text-decoration:underline;">Our site</a></p>
			</div>
			
			</div>
		</article>
		
	</div>
<?php get_footer();?>