<?php 
$fileLevel = "../";
$title = "New phaser game | Deej Potter Designs";
include "../templates/header.php" 
?>

<main id="main">	

    <!-- Hero section -->
	<?php
		$bgColour = "primary";
		$bgImage = "../images/pricing-image-50-900x600.png";
		$textColour = "light";
		$sectionH1 = "New phaser game";
		$sectionP = "This is a new phaser game.";
		$otherClasses = "inset-background-cover";
		include "../templates/hero.php"
    ?>	

    <!-- Content section -->
    <section class="container">
        <div id="game-area" class=""></div>

        <script src="<?php echo $fileLevel ?>js/phaser.js"></script>
        <script src="<?php echo $fileLevel ?>js/new-phaser/new-phaser.js"></script>
    </section>
	
</main>

<?php include "../templates/footer.php" ?>