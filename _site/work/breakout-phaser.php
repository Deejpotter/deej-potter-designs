<?php 
$fileLevel = "../";
$title = "Phaser breakout clone | Deej Potter Designs";
$description = "I made this to practice Phaser. It's pretty rusty but it was fun to make and it might be interesting to play.";
$link = "https://deejpotterdesigns.com/work/breakout-phaser.php";
$image = "https://deejpotterdesigns.com/images/logo.png";
include "../templates/header.php" 
?>

<main id="main">	

    <!-- Hero section -->
	<?php
		$bgColour = "primary";
		$bgImage = "../images/pricing-image-50-900x600.png";
		$textColour = "light";
		$sectionH1 = "Phaser Breakout clone";
		$sectionP = "I made this to practice Phaser. It's pretty rusty but it was fun to make and it might be interesting to play.";
		$otherClasses = "inset-background-cover";
		include "../templates/hero.php"
    ?>	

    <!-- Content section -->
    <section class="container">
        <div id="game-area" class=""></div>

        <script src="<?php echo $fileLevel ?>js/phaser.js"></script>
        <script src="<?php echo $fileLevel ?>js/breakout-phaser.js"></script>
    </section>
	
</main>

<?php include $fileLevel."templates/footer.php" ?>