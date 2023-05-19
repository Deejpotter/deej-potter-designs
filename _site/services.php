<?php 
$fileLevel = "";
$title = "Services | Deej Potter Designs";
$description = "This is a list of all my services. Check it out to find out what I can do and how it can help your business.";
$link = "https://deejpotterdesigns.com/services.php";
$image = "https://deejpotterdesigns.com/images/logo.png";
include "./templates/header.php" 
?>

<main id="index">
	  
	<!-- Hero section -->
	<section class="index-hero inset-background-left">
		<div class="container">
			<div class="container">
				<h1>Index Page</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis turpis pretium, congue augue ut, pellentesque dui. Maecenas condimentum volutpat arcu, at finibus purus congue sed. Pellentesque tristique iaculis gravida.</p>
			</div>
		</div>
	</section>	
		
	<section class="index-section">
		<div class="index-card">
			<div class="container">
				<div class="">
					<h2>Deej Potter Designs</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis turpis pretium, congue augue ut, pellentesque dui. Maecenas condimentum volutpat arcu, at finibus purus congue sed. Pellentesque tristique iaculis gravida.</p>
				</div>
			</div>
			<a href= "<?php echo $fileLevel ?>index.html">
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>
		<div class="index-card">
			<div class="container">
				<div class="">
					<h2>Deej Potter Designs</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis turpis pretium, congue augue ut, pellentesque dui. Maecenas condimentum volutpat arcu, at finibus purus congue sed. Pellentesque tristique iaculis gravida.</p>
				</div>
			</div>
			<a href= "<?php echo $fileLevel ?>index.html">
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>
		<div class="index-card">
			<div class="container">
				<div class="">
					<h2>Deej Potter Designs</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis turpis pretium, congue augue ut, pellentesque dui. Maecenas condimentum volutpat arcu, at finibus purus congue sed. Pellentesque tristique iaculis gravida.</p>
				</div>
			</div>
			<a href= "<?php echo $fileLevel ?>index.html">
				<i class="fa fa-chevron-right"></i>
			</a>
		</div>
	</section>
	
</main>

<?php include "./templates/footer.php" ?>