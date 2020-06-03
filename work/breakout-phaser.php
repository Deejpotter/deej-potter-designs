<?php 
$fileLevel = "../";
$title = "Phaser breakout clone | Deej Potter Designs";
include "../templates/header.php" 
?>

<main id="main">	

    <!-- Hero section -->
	<section class="home hero inset-background-left">
		<div class="container">
			<div class="container">
				<h1>Phaser breakout clone</h1>
				<i class="fas fa-chevron-down"></i>
			</div>
		</div>
	</section>	

    <!-- Content section -->
    <section>
        <div class="container">
            <h2>Try the game</h2>
            <p>I made this to practice Phaser. It's pretty rusty but it was fun to make and it 
            might be interesting to play.</p>
            <div id="game-area"></div>

            <script src="<?php echo $fileLevel ?>js/phaser.js"></script>
            <script src="<?php echo $fileLevel ?>js/breakout-phaser.js"></script>
        </div>
    </section>
	
</main>

<?php include "../templates/footer.php" ?>