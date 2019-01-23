<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    
  	
		<div class="container"> 
			<?php
			
			if(have_posts()): 
			
			while ( have_posts() ) : the_post(); ?>
			
			<article class="page_content_wrap"> 
				<p><?php the_content();?></p>
			</article>
			

	<?php	endwhile;
	
			endif;

	// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
					  // End loop
			?>
		</div>

<?php get_footer();?>