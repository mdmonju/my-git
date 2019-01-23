<!DOCTYPE HTML>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name');?></title>
	<link rel="icon" href="images/mainlogo.png"/>
<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<header> 
		<section id="header" class="text-center"> 
			<div class="container">
				<div class="header_content"> 
					<div class="logo">
						<img src="<?php echo get_template_directory_uri();?>/images/mainlogo.png" alt="" />
					</div>
					<div class="header_text"> 
						<h1><a style="color:<?php echo cs_get_option('top-heading-color');?>" href="<?php echo home_url();?>"><?php echo cs_get_option('top-heading');?></a></h1>
					</div>
				</div>
			</div>
		</section>
	</header>
	<body <?php body_class();?>>
	<section id="heading"> 
		<div class="container"> 
			<div class="title"> 
				<h1><a href="<?php echo home_url();?>"><span>MI</span><?php bloginfo('name');?></a></h1>
			</div>
			<div class="subtitle"> 
				<p><?php bloginfo('description');?></p>
			</div>
		</div>
	</section>
	<section id="menu"> 
		  <!-- Calling nav -->
        <?php get_template_part('nav');?>
	</section>
	