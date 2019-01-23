<?php 


function codex_portfolio_init() {
	$labels = array(
		'name'               => _x( 'portfolios', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'portfolios', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'portfolio', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All portfolios', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search portfolios', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent portfolios:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No portfolios found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No portfolios found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'codex_portfolio_init' );


// category

function create_category_taxonomy() {
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Category', 'textdomain' ),
		'update_item'       => __( 'Update Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Category', 'textdomain' ),
		'new_item_name'     => __( 'New Category Name', 'textdomain' ),
		'menu_name'         => __( 'Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'Category' ),
	);

	register_taxonomy( 'Category', array( 'portfolio' ), $args );

}

add_action( 'init', 'create_category_taxonomy', 0 );

// tags

function create_tag_taxonomy() {
	
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Tags', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Tag', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Tags', 'textdomain' ),
		'popular_items'              => __( 'Popular Tags', 'textdomain' ),
		'all_items'                  => __( 'All Tags', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Tag', 'textdomain' ),
		'update_item'                => __( 'Update Tag', 'textdomain' ),
		'add_new_item'               => __( 'Add New Tag', 'textdomain' ),
		'new_item_name'              => __( 'New Tag Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Tags with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Tags', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Tags', 'textdomain' ),
		'not_found'                  => __( 'No Tags found.', 'textdomain' ),
		'menu_name'                  => __( 'Tags', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'Tag' ),
	);

	register_taxonomy( 'Tag', 'portfolio', $args );
}

add_action( 'init', 'create_tag_taxonomy', 0 );


// Create custom Metabox


function portfolio_add_meta_box(){
	
	add_meta_box(
	
		'portfolio_section_id', //id 
		'Portfolio Metabox', //title
		'portfolio_section_callback', //callback
		'portfolio', //screen
		'normal', //context
		'default' //priority
	);
}
add_action('add_meta_boxes','portfolio_add_meta_box');
	

	
function portfolio_section_callback($post){ 

 wp_nonce_field('portfolio_meta_box','portfolio_meta_box_nonce');

$title =get_post_meta($post->ID,'title',true);

?>
	
	
	<p>
	<label>Title</label>
	<input type="text" name="title" value="<?php echo $title;?>"/>	
	</p>
	
<?php }

function portfolio_save_meta($post_id){
	
// Check if our nonce is set.


	if ( ! isset( $_POST['portfolio_meta_box_nonce'] ) ) {
		return;
	}
	
		
	// Verify that the nonce is valid.
	
		if ( ! wp_verify_nonce( $_POST['portfolio_meta_box_nonce'], 'portfolio_meta_box' ) ) {
		return;
	}
	
	
// Make sure that it(input) is set.
	if ( ! isset( $_POST['title'] ) ) {
		return;
	}
	
	
	// Sanitize user input.
	$my_title = sanitize_text_field( $_POST['title'] );	

	// Update the meta field in the database.
	update_post_meta( $post_id, 'title', $my_title );
	
	
}
add_action( 'save_post', 'portfolio_save_meta' );
	
?>

<?php echo  get_post_meta($post->ID,'title',true); ?>



