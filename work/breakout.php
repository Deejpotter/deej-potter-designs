<?php 
$fileLevel = "../";
$title = "Breakout clone | Deej Potter Designs";
include "../templates/footer.php" 
?>

<main id="main">	

    <!-- Hero section -->
	<section class="home hero inset-background-left">
		<div class="content-wrapper-horizontal">
			<div class="content-wrapper-vertical">
				<h1>Breakout clone</h1>
				<i class="fas fa-chevron-down"></i>
			</div>
		</div>
	</section>	

    <!-- Content section -->
    <section>
        <h2>Try the game</h2>
        <p>I made this to practice Javascript. It's pretty rusty but it was fun to make and it 
        might be interesting to play.</p>
        <canvas id="myCanvas" width="480" height="320"></canvas>

        <script src="<?php echo $fileLevel ?>js/breakout.js"></script>
    </section>
	
</main>

<?php include "../templates/footer.php" ?>