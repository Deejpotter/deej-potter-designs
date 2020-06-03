<?php 
$fileLevel = "";
$title = "Your personal web designer | Deej Potter Designs";
include "templates/header.php" 
?>

<main id="main">
	
	<!-- Hero section -->
	<section class="home hero inset-background-left">
		<div class="content-wrapper-horizontal">
			<div>
				<h1>Deej Potter Designs</h1>
				<p>Your own personal web designer. <br>Prices start at $100. <br><strong>Contact me now!</strong></p>
				<i class="fas fa-chevron-down"></i>
			</div>
		</div>
	</section>
	
	<!-- Personal section -->
	<section class="personal-section">
		<div class="content-wrapper-vertical">
			<div>
			<h2>I’m here to help you</h2>
			<p>I know there is a lot to learn when it comes to the internet so I’m here to guide you through the whole journey. 
			You’ll have personal contact with me the whole time and I will be happy to answer any questions you have. 
			I also have varying levels of service after your website is finished so you can be sure you will never be left 
			not knowing what to do next.</p>
			</div>
		</div>
	</section>

	<!-- Technical section -->
	<section class="technical-section inset-background-right">
		<div class="content-wrapper-vertical">				
			<div class= "content-wrapper-horizontal">
				<div>
					<h2>An affordable marketing option</h2>
					<p>Every business needs a website. When people are looking for something these days the first place 
					they look is online. So what do people see when they search for you? This is where I come in. I can 
					build you a high quality, responsive website for as little as $100. You can then take your website 
					and you’re free to do whatever you want with it but if you need help with that I offer a few levels 
					of service from as little as $10 per month. You can read more about my prices on my pricing page.</p>
					<a class="main-header-contact" href= "<?php echo $fileLevel ?>pricing.php">My prices</a>
				</div>
			</div>
		</div>
	</section>
	
	<!-- About me section -->
	<section class="about-me-section">
		<div class="content-wrapper-vertical">
			<div>
				<h2>Helpful and technological</h2>
				<p>I love working with technology and I love helping people. With web design, 
				I get to do both of those things. I have a wife and 3 kids and they are the main reason 
				I wanted to start my own business, to spend more time with them. If you’d like to know more 
				check out my personal page.</p>
				<a class="main-header-contact" href= "<?php echo $fileLevel ?>about.php">About me</a>
			</div>
		</div>
	</section>
	
	<!-- Contact section -->
	<section class= "home-contact inset">
		<div class="content-wrapper-vertical">				
			<h2>Ready to get started?</h2>
			<p>Maybe you just have some questions. <br>Either way, contact me and let me know. I’d love to hear from you.</p>
			<a class="main-header-contact" href= "<?php echo $fileLevel ?>contact.php">Contact me now!</a>						
		</div>	
	</section>
		
</main>

<?php include "templates/footer.php" ?>