<?php 
$fileLevel = "";
$title = "My work";
include "./header.php" 
?>

<main id="index">
	  
	<!-- Hero section -->
	<section class="index-hero inset-background-left">
		<div class="content-wrapper-horizontal">
			<div class="content-wrapper-vertical">
				<h1>My work</h1>
				<p>On this page is a list of projects I have made including a description of what I did during the project
					and my reasons for the decisions I made where it's applicable. As always, if you have any questions about 
					the things in here feel free to contact me.
				</p>
			</div>
		</div>
	</section>	
		
	<!-- Calculator -->
	<section class="index-section">
		<div class="index-card">
			<div class="content-wrapper-vertical">
				<div class="">
					<h2>Online calculator</h2>
					<p>This is something I made for a bit of practice. It's an online calculator. It's pretty self-explanitory,
						it can do basic math problems.
					</p>
				</div>
			</div>
			<a href= "<?php echo $fileLevel ?>work/calculator.php">
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>

		<!-- Breakout -->
		<section class="index-section">
		<div class="index-card">
			<div class="content-wrapper-vertical">
				<div class="">
					<h2>Breakout clone</h2>
					<p>I made this small game to practice Javascript. It's pretty rusty but it was fun to make and it 
					might be interesting to play.</p>
				</div>
			</div>
			<a href= "<?php echo $fileLevel ?>work/breakout.php">
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>

		<!-- Phaser Breakout -->
		<section class="index-section">
		<div class="index-card">
			<div class="content-wrapper-vertical">
				<div class="">
					<h2>Breakout clone</h2>
					<p>I made this small game to practice Phaser. It's mostly the same as the other breakout game 
					but there are a few extras added in.</p>
				</div>
			</div>
			<a href= "<?php echo $fileLevel ?>work/breakout-phaser.php">
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>
	
</main>

<?php include "./footer.php" ?>