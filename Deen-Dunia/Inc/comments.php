<?php /*
	
@package sunsettheme

*/

if( post_password_required() ){
	return;
}

?>

<div class="leave_comment_form_container">
	<form action="post">
	
	<?php 
		if( have_comments() ):
		//We have comments
	?>
	
		<div class="comments_title" style="margin-bottom:40px;">Comments</div>
		
		
		<?php sunset_get_post_navigation(); ?>
		
		<ul class="comments_list">
			
			<?php 
				
				$args = array(
					'walker'			=> null,
					'max_depth' 		=> '',
					'style'				=> 'ol',
					'callback'			=> null,
					'end-callback'		=> null,
					'type'				=> 'all',
					'reply_text'		=> 'Reply',
					'page'				=> '',
					'per_page'			=> '',
					'avatar_size'		=> 64,
					'reverse_top_level' => null,
					'reverse_children'	=> '',
					'format'			=> 'html5',
					'short_ping'		=> false,
					'echo'				=> true
				);
				
				wp_list_comments( $args );
			?>
			
		</ul>
		
		<?php sunset_get_post_navigation(); ?>
		
		<?php 
			if( !comments_open() && get_comments_number() ):
		?>
			 
			 <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sunsettheme' ); ?></p>
			 
		<?php
			endif;
		?>
		
	<?php	
		endif;
	?>
	
	<?php 
		
		$fields = array(
			
			'author' =>
				'<div class="form-group"><label for="author">' . __( '', 'domainreference' ) . '</label> <span class="required"></span> <input placeholder="Name" id="comment_form_name" name="author" type="text" class="input_field contact_form_name" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
				
			'email' =>
				'<div class="form-group"><label for="email">' . __( '', 'domainreference' ) . '</label> <span class="required"></span><input placeholder="Email" id="comment_form_email" name="email" class="input_field contact_form_email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" /></div>',
				
		);
		
		$args = array(
			
			'class_submit' => 'comment_send_btn trans_200',
			'id_submit' => 'comment_send_btn',
			'label_submit' => __( 'send message' ),
			'comment_field' =>
				'<div class="form-group"><label for="comment">' . _x( '', 'noun' ) . '</label> <span class="required"></span><textarea placeholder="Message" id="comment_form_message" class="text_field contact_form_message" name="comment" rows="4" required="required"></textarea></p>',
			'fields' => apply_filters( 'comment_form_default_fields', $fields )
			
		);
		
		comment_form( $args ); 
		
	?>
	</form>
</div><!-- .comments-area -->
