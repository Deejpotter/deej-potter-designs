<!doctype html>
<html lang="en">

  	<head>

		<title> <?php echo $title?> </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel= "stylesheet" href= "<?php echo $fileLevel ?>css/normalize.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="<?php echo $fileLevel ?>css/style.css">

		<!-- Global site tag (gtag.js) - Google Ads: 785399603 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-785399603"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'AW-785399603');
			gtag('config', 'UA-126790088-1');
		</script>

 	</head>


	<body>
		
		
		<!-- Main header for every page -->
	  <header class="main-header">
			<div class="main-header-top">
				<a href="<?php echo $fileLevel ?>index.php">
					<img class="logo" src="<?php echo $fileLevel ?>images/logo.png">
				</a>
				<a class="main-header-contact" href="<?php echo $fileLevel ?>contact.php">Contact</a>
			</div>
			<div class="main-header-bottom">
				<nav class="main-nav">	
					<a href="<?php echo $fileLevel ?>pricing.php">Pricing</a>
					<hr>			
					<a href="<?php echo $fileLevel ?>about.php">About Me</a>
					<hr>
					<!-- <div class="dropdown">
						<a href="<?php echo $fileLevel ?>services.php">Services</a>
						<div class="dropdown-content">
							<a href="<?php echo $fileLevel ?>services/design.php">Design</a>
							<a href="<?php echo $fileLevel ?>services/development.php">Development</a>
							<a href="<?php echo $fileLevel ?>services/branding.php">Branding</a>
						</div>
					</div>
					<hr> -->
					<div class="dropdown">
						<a href="<?php echo $fileLevel ?>work.php">My work</a>
						<div class="dropdown-content">
							<a href="<?php echo $fileLevel ?>work/calculator.php">Calculator</a>
							<a href="<?php echo $fileLevel ?>work/breakout.php">Breakout clone</a>
							<a href="<?php echo $fileLevel ?>work/breakout-phaser.php">Phaser Breakout clone</a>
						</div>
					</div>						
					<!-- <hr>
					<a href="<?php echo $fileLevel ?>blog.php">Blog</a>					
				</nav>					 -->
			</div>
			<a href="javascript:void(0);" class="mobile-menu-button" onclick="toggleMenu()">
				<i class="fa fa-bars"></i>
			</a>
	  	</header>