<?php

// Comment fields position modify
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );





// custom comment fields

/**
function my_update_comment_fields( $fields ) {

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '' : ' ' . __( '(optional)', 'text-domain' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$fields['author'] =
		'<p class="comment-form-author">
			<label for="author">' . __( "", "text-domain" ) . $label . '</label>
			<input id="author" name="author" type="text" placeholder="' . esc_attr__( "Name", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['email'] =
		'<p class="comment-form-email">
			<label for="email">' . __( "", "text-domain" ) . $label . '</label>
			<input id="email" name="email" type="email" placeholder="' . esc_attr__( "E-mail", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['url'] =
		'<p class="comment-form-url">
			<label for="url">' . __( "", "text-domain" ) . '</label>
			<input id="url" name="url" type="url"  placeholder="' . esc_attr__( "Website", "text-domain" ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" />
			</p>';

	return $fields;
}
add_filter( 'comment_form_default_fields', 'my_update_comment_fields' ); **/




/*
custom comment style

#comment {
    width: 100%;
		border: none;
		background: #f8f4f4;
		padding-left: 15px;
	
}
#author, #email , #url{
    width: 100%;
    background: #f8f4f4;
    border: solid 2px transparent;
    height: 42px;
    padding-left: 33px;
}
#submit{
	width: 100%;
    height: 48px;
    background: #ffb606;
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    color: #FFFFFF;
    cursor: pointer;
		border:none;
}






*/









?>