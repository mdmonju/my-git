<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<title><?php bloginfo('name')?></title>
	
<?php wp_head();?>
</head>
<body  <?php body_class(); ?>>
<div class="container_full ">
	<div class="container "> 
		<header> 
			<div class="heading"> 
				<div class="heading_title floatleft"> 
					<h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
				
				</div>
				<div class="heading_subtitle"> 
					<p><?php bloginfo('description');?></p>
				</div>
			</div>
		</header>