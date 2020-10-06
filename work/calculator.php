<?php 
$fileLevel = "../";
$title = "Online calculator | Deej Potter Designs";
$description = "I made this calculator to practice Javascript. It's pretty basic, it can do all the basic calculator things.";
$link = "https://deejpotterdesigns.com/work/calculator.php";
$image = "https://deejpotterdesigns.com/images/logo.png";
include "../templates/header.php" 
?>

<main id="main">

    <!-- Hero section -->
	<?php
		$bgColour = "primary";
		$bgImage = "../images/pricing-image-50-900x600.png";
		$textColour = "light";
		$sectionH1 = "My calculator";
		$sectionP = "You can calculate numbers below.";
		$otherClasses = "inset-background-cover";
		include "../templates/hero.php"
    ?>	
    
    <!-- Calculator section -->
    <div id="calculator">
        <div class="screen">
            <p id="old-text">0</p>
            <p id="output-text">0</p>
        </div>
        <div class="keypad">
            <button class="1" onclick="Output(1)">1</button>
            <button class="2" onclick="Output(2)">2</button>
            <button class="3" onclick="Output(3)">3</button>
            <button class="4" onclick="Output(4)">4</button>
            <button class="5" onclick="Output(5)">5</button>
            <button class="6" onclick="Output(6)">6</button>
            <button class="7" onclick="Output(7)">7</button>
            <button class="8" onclick="Output(8)">8</button>
            <button class="9" onclick="Output(9)">9</button>
            <button class="0" onclick="Output(0)">0</button>
            <button class="c" onclick="ClearDisplay()">c</button>
            <button class="addition" onclick="Output('+')">+</button>
            <button class="subtraction" onclick="Output('-')">-</button>
            <button class="division" onclick="Output('/')">/</button>
            <button class="multiplication" onclick="Output('*')">*</button>
            <button class="equals" onclick="Evaluate()">=</button>
        </div>
    </div>

    <!-- Javascript -->
    <script src="<?php echo $fileLevel ?>js/calculator.js"></script>
</main>

<?php include $fileLevel."templates/footer.php" ?>