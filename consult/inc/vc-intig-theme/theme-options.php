<?php 

function consult_intigratewiththeme(){

// Section 1
	
	vc_map(array(
	
	'name' => __('First Section','text-domain'),
	'description' => 'This is first addon',
	'base' => 'section_1_base',
	'category' => 'Consult',
	'icon' => get_template_directory_uri().'../images/favicon.ico',
	'params' => array(
	
	array(
	'param_name'=>'section_1_title',
	'type'=>'textfield',
	'heading'=>'Section One Title',
	'value'=>'Enter your title',
	'group'=>'Text',
	),
	array(
	'param_name'=>'section_1_title_color',
	'type'=>'colorpicker',
	'heading'=>'Section One Title Color',
	'group'=>'Color',
	),
	array(
	'param_name'=>'section_1_description',
	'type'=>'textarea',
	'heading'=>'Section One Description',
	'value'=>'Enter your Description',
	'group'=>'Text',
	),
	array(
	'param_name'=>'section_1_description_color',
	'type'=>'colorpicker',
	'heading'=>'Section One Description Color',
	'group'=>'Color',
	),
	array(
	'param_name'=>'section_1_image',
	'type'=>'attach_image',
	'heading'=>'Section One Image',
	'group'=>'Image',
	),
	),
	));	
	
	// Section 2
	
vc_map(array(
	'name' => __('Second Section','text-domain'),
	'description' => 'This is second addon',
	'base' => 'section_2_base',
	'category' => 'Consult',
	'icon' => get_template_directory_uri().'../images/favicon.ico',
	'params' => array(
	
		array(
		
			'type'=>'param_group',
			'heading'=>'Section Two Items',
			'param_name'=>'sec_2_grp',
			'params'=>array(
			
		array(
		
			'param_name'=>'section_2_image',
			'type'=>'attach_image',
			'heading'=>'Section Two Image',
		),
		array(
		
			'param_name'=>'section_2_title',
			'type'=>'textfield',
			'heading'=>'Section Two Title',
		),
		array(
		
			'param_name'=>'section_2_description',
			'type'=>'textarea',
			'heading'=>'Section Two Description',
		),
			)
		),
	)
	));
	
	// Section 3
	
vc_map(array(
	'name' => __('Third Section','text-domain'),
	'description' => 'This is third addon',
	'base' => 'section_3_base',
	'category' => 'Consult',
	'icon' => get_template_directory_uri().'../images/favicon.ico',
	'params' => array(
	
		array(
		
			'type'=>'param_group',
			'heading'=>'Section Three Items',
			'param_name'=>'sec_3_grp',
			'params'=>array(
			
				array(
				
			'param_name'=>'icon_image',
			'heading'=>'Section three icon image',
			'type'=>'dropdown',
			'group'=>'Icon Image',
			'value'=>array(
			
				'Select a value'=>'',
				'icon'=>'fontawesome',
				'image'=>'custom',
		),
		),
		array(
		
			'param_name'=>'section_3_image',
			'type'=>'attach_image',
			'heading'=>'Section Three Image',
			'group'=>'Icon Image',
			'dependency'=>array(
			
				'element'=>'icon_image',
				'value'=>'custom',
		),
		),
		array(
		
			'param_name'=>'section_3_icon',
			'type'=>'iconpicker',
			'heading'=>'Section Three Icon',
			'group'=>'Icon Image',
			'dependency'=>array(
			
				'element'=>'icon_image',
				'value'=>'fontawesome',
		),
		),
		array(
		
			'param_name'=>'section_3_title',
			'type'=>'textfield',
			'heading'=>'Section Three Title',
			'group'=>'Text',
		),
		array(
		
			'param_name'=>'section_3_description',
			'type'=>'textarea',
			'heading'=>'Section Three Description',
			'group'=>'Text',
		),
			)
		),
	)
	));
	
	
// home blog
	
	vc_map(array(
		'name' => __('Home Blog','text-domain'),
		'description' => 'This is Blog section',
		'base' => 'section_blog',
		'category' => 'Consult',
		'icon' => get_template_directory_uri().'../images/favicon.ico',
		'params' => array(
			array(
				'param_name'=>'sec_blog_title',
				'heading'=>'Latest Title',
				'type'=>'textfield',
			)
			
		
		)
	
	));
	
// Our Mission
	
	vc_map(array(
	
	'name' => __('Our Mission','text-domain'),
	'description' => 'Our Mission',
	'base' => 'our_mission_base',
	'category' => 'Consult',
	'icon' => get_template_directory_uri().'../images/favicon.ico',
	'params' => array(
	
	array(
	'param_name'=>'our_mission_title',
	'type'=>'textfield',
	'heading'=>'Our Mission Title',
	'value'=>'Enter your title',
	'group'=>'Text',
	),
	array(
	'param_name'=>'our_mission_title_color',
	'type'=>'colorpicker',
	'heading'=>'Our Mission Title Color',
	'group'=>'Color',
	),
	array(
	'param_name'=>'our_mission_description',
	'type'=>'textarea',
	'heading'=>'Our Mission Description',
	'value'=>'Enter your Description',
	'group'=>'Text',
	),
	array(
	'param_name'=>'Our_mission_description_color',
	'type'=>'colorpicker',
	'heading'=>'Our Mission Description Color',
	'group'=>'Color',
	),
	array(
	'param_name'=>'Our_mission_image',
	'type'=>'attach_image',
	'heading'=>'Our Mission Image',
	'group'=>'Image',
	),
	),
	));
	
	// end our mission
}

add_action('vc_before_init','consult_intigratewiththeme');





?>