<?php
$fileLevel = "";
$title = "My work | Deej Potter Designs";
$description = "On this page is a list of projects I have made including a description of what I did during the project and my reasons for the decisions I made where it's applicable.";
$link = "https://deejpotterdesigns.com/work.php";
$image = "https://deejpotterdesigns.com/images/logo.png";
include "./templates/header.php"
?>

<main id="index">

	<!-- Hero section -->
	<?php
	$bgColour = "primary";
	$bgImage = "images/pricing-image-50-900x600.png";
	$textColour = "light";
	$sectionH1 = "My work";
	$sectionP = "On this page is a list of projects I have made including a description of what I did during the project
	and my reasons for the decisions I made where it's applicable. As always, if you have any questions about 
	the things in here feel free to contact me.";
	$otherClasses = "inset-background-cover";
	include "templates/hero.php"
	?>

	<!-- Index section -->
	<?php
	$bgColour = "light";
	$textColour = "dark";
	$bgImage = "";
	$sectionH2 = "Colour App";
	$sectionP = "An online app to share your favourite colour with other people and see who has the same favourite.";
	$sectionButtonLink = "work/colourApp.php";
	$otherClasses = "";
	include "templates/index-section.php"
	?>

	<!-- Index section -->
	<?php
	$bgColour = "light";
	$textColour = "dark";
	$bgImage = "";
	$sectionH2 = "Online calculator";
	$sectionP = "This is something I made for a bit of practice. It's an online calculator. It's pretty self-explanitory, it can do basic math problems.";
	$sectionButtonLink = "work/calculator.php";
	$otherClasses = "";
	include "templates/index-section.php"
	?>

	<!-- Index section -->
	<?php
	$bgColour = "light";
	$textColour = "dark";
	$bgImage = "";
	$sectionH2 = "New phaser game";
	$sectionP = "This is a new phaser game.";
	$sectionButtonLink = "work/new-phaser.php";
	$otherClasses = "";
	include "templates/index-section.php"
	?>

	<!-- Index section -->
	<?php
	$bgColour = "light";
	$textColour = "dark";
	$bgImage = "";
	$sectionH2 = "Breakout clone";
	$sectionP = "I made this small game to practice Phaser. It's mostly the same as the other breakout game but there are a few extras added in.";
	$sectionButtonLink = "work/breakout-phaser.php";
	$otherClasses = "";
	include "templates/index-section.php"
	?>

	<!-- Index section -->
	<?php
	$bgColour = "light";
	$textColour = "dark";
	$bgImage = "";
	$sectionH2 = "Breakout clone";
	$sectionP = "I made this small game to practice Javascript. It's pretty rusty but it was fun to make and it might be interesting to play.";
	$sectionButtonLink = "work/breakout.php";
	$otherClasses = "";
	include "templates/index-section.php"
	?>

</main>

<?php include "./templates/footer.php" ?>