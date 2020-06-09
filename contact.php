<?php 
$fileLevel = "";
$title = "Contact me";
include "templates/header.php" 
?>

<main id="main">

	<!-- Hero section -->
	<?php
		$bgColour = "primary";
		$bgImage = "images/contact-image-50-800x600.png";
		$textColour = "light";
		$sectionH1 = "Ready to talk about your project?";
		$sectionP = "Please fill out the form below and I'll get back to you as soon as I can. 
		I can't wait to hear from you.";
		$otherClasses = "inset-background-cover";
		include "templates/hero.php"
	?>
	
	<section class="container py-5">
		<div class="row">
			<div class="col-md">
				<h2>This is the final step before we can get started on your website</h2>
				<p>I need some information from you to get in contact. I promise I'll only use this information to email 
				you about your project, I won't share it with anyone or use it for any other reason.</p>
			</div>
			<div class="col-md">
				<form id="contact-page-form" name="emailform" action="form-post.php" method="post">
					<div class="form-group">
						<label for='name'>Enter Name: </label>
						<input class="form-control shadow" type="text" name="name">
					</div>
					<div class="form-group">
						<label for='email'>Enter Email Address:</label>
						<input class="form-control shadow" type="text" name="email">
					</div>
					<div class="form-group">
						<label for='message'>Enter Message (optional):</label>
						<textarea class="form-control shadow" name="message"></textarea>
					</div>
					<!-- <script src="https://www.google.com/recaptcha/api.js?render=6LcAU90UAAAAAAwVixlhO4KYsUb4Dm8YZEn7bdbc"></script>
					<script>
					grecaptcha.ready(
						function() {
							grecaptcha.execute('6LcAU90UAAAAAAwVixlhO4KYsUb4Dm8YZEn7bdbc', {action: 'homepage'}).then(
								function(token) {
								...
								}
							);
						}
					);
					</script> -->
					<input id="submit-button" class="btn btn-primary shadow" type="submit" name='submit' value="Contact me">
				</form>
			</div>
		</div>
	</section>

	<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
<script language="JavaScript">
	// Code for validating the form
	// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
	// for details
	var frmvalidator  = new Validator("emailform");
	frmvalidator.addValidation("name","req","Please provide your name"); 
	frmvalidator.addValidation("email","req","Please provide your email"); 
	frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>	
		
</main>

<?php include "templates/footer.php" ?>