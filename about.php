<?php
$fileLevel = "";
$title = "About me";
include "templates/header.php" 
?>

<main id="main">
	  
	<!-- Hero section -->
	<section class="about-me-image hero inset-background-left">
		<div class="container">
			<div class="container">
				<h1>All about me</h1>
				<p>If you want to know more about my life you've come to the right place</p>
				<i class="fas fa-chevron-down"></i>
			</div>
		</div>
	</section>	

	<section>
		<div class="container">
			<div class="container">
				<div>
					<h2>I love technology</h2>
					<p>I have always had a love for technology. Since I can remember I have been messing around with every 
					electronic device I could get my hands on.</p>
					<p>I grew up with the internet so I have had a lot of time 
					to figure out how it works and I also love sharing my knowledge with other people. I’m always happy 
					to help someone who needs it and if I can practice my skills at the same time, even better.</p>

					<h2>I love learning</h2>
					<p>I completed a certificate in IT in 2013 but most of what I know about web design has been self-taught. 
					To be honest, the rules and practices change so often that any good web designer should be self-taught.</p>
					<p>I have also used online courses for the trickier stuff. Linkedin Learning has very professional content 
					and I would recommend it if you want to learn about business, technology, or design. </p>

					<h2>I love my family</h2>
					<p>My family is really important to me. I am married and I have 3 kids.</p>
					<p>My family is the main reason I wanted to start my own business, so I could spend more time with them. 
					If I have any spare time I enjoy making and playing video games as well as learning about science and philosophy.</p>
					<p>Although, most of the time when I’m not working I’m studying to make better websites because there is so much to learn.</p>

					<h2>I love helping people</h2>
					<p>If you want to know anything else about me just send me a message. I'd love to answer your questions.</p>
					<a class="main-header-contact" href="<?php echo $fileLevel ?>contact.php">Contact me</a>
				</div>
			</div>
		</div>
	</section>
		
</main>

<?php include "templates/footer.php" ?>