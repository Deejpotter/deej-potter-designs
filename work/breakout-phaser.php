<?php 
$fileLevel = "../";
$title = "Phaser breakout clone | Deej Potter Designs";
include "../templates/footer.php" 
?>

<main id="main">	

    <!-- Hero section -->
	<section class="home hero inset-background-left">
		<div class="content-wrapper-horizontal">
			<div class="content-wrapper-vertical">
				<h1>Phaser breakout clone</h1>
				<i class="fas fa-chevron-down"></i>
			</div>
		</div>
	</section>	

    <!-- Content section -->
    <section>
        <div class="content-wrapper-vertical">
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