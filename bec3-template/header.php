<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="utf-8">
		<title>BeC3</title>
	  	<meta name="keywords" content="">
	  	<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<meta property="og:title" content="">
		<meta property="og:type" content="website">
		<meta property="og:url" content="">
		<meta property="og:site_name" content="">
	 	<meta property="og:description" content="">
	
	 	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
	  
	 	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" media="screen" type="text/css" />
	 	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" media="screen" type="text/css" />
	 	
	 	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hamburgers.css" media="screen" type="text/css" />
	 	
	 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	 	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-2.7.1.js"></script>
	
	</head>

	<body>
		
		<header class="page">
	      <div class="container">
	      	<div class="menu">
		        <div class="row">
		          <div class="col-xs-3">
		            <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Logo"></a>
		          </div>
		          
		          <div class="nav-icon">
				  	<div class="hamburger hamburger--spring">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				  </div>
		          
		          <div class="text-right navbar-nav">
		          
		          	<div class="nav-menu">
			          	<?php
			          	
			          		$defaults = array(
							    'menu' => 'main-menu-page',
							    'menu_id' => 'main-menu-page',
							    'menu_class'        => false, 
							    'echo'            => false,
							    'fallback_cb'     => false,
							    'depth'           => 0,
							    'items_wrap'        => '%3$s', 
							    'container'         => false,
							    'container_class'   => false,
							    'container_id'      => false,
							    'before'            => false,
							    'after'             => false,
							);
	
							echo strip_tags( wp_nav_menu($defaults) , '<a>');
							
						?>
		          	</div>
		          	
		          </div>
		        </div>
	      	</div>
	    </header>