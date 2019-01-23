<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <!-- meta data -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- title of site -->
    <title><?php bloginfo('name');?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
   

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
<?php wp_head();?>	
</head>

<body <?php body_class();?>>

<?php 

if(cs_get_option('Preloader1')){ ?>
	
	    <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div> 
    <!--End Preloader-->
	
<?php }

?>



  <header id="header" class="header_areaa">
  <!-- Calling nav -->
        <?php get_template_part('nav');?>
		
  </header><!-- /header -->