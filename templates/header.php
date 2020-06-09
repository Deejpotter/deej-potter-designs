<!doctype html>
<html lang="en">

  	<head>

		<title> <?php echo $title?> </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo $fileLevel ?>css/bootstrap.css">

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

		<script data-ad-client="ca-pub-1522429823434823" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

 	</head>


	<body>
		
		<!-- Main header for every page -->
		<nav class="navbar navbar-expand-md">
			<div class="container">
				<!-- Brand -->
				<a class="navbar-brand" href="<?php echo $fileLevel ?>index.php">
					<img src="<?php echo $fileLevel ?>images/logo.png">
				</a>

				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<i class="fas fa-bars"></i>
				</button>

				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav nav-fill ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $fileLevel ?>pricing.php">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $fileLevel ?>about.php">About me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $fileLevel ?>work.php">My work</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-primary btn-lg shadow" href="<?php echo $fileLevel ?>contact.php">Contact me</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>