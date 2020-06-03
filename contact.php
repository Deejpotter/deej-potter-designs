<?php 
$fileLevel = "";
$title = "Contact me";
include "templates/footer.php" 
?>

<main id="main">
	  
	<!-- Hero section -->
	<section class="contact-image hero inset-background-left">
		<div class="content-wrapper-horizontal">
			<div class="content-wrapper-vertical">
				<h1>Ready to talk about your project?</h1>
				<p>Please fill out the form below and I'll get back to you as soon as I can. 
					I look forward to hearing from you.</p>
				<i class="fas fa-chevron-down"></i>
			</div>
		</div>
	</section>	
	
	<section>
		<div class="content-wrapper-horizontal">
			<div class="content-wrapper-vertical">
				<h2>This is the final step before I can start working on your website</h2>
				<p>I need some information from you to get in contact. I promise I'll only use this information to email 
					you about your project, I won't share it with anyone or use it for any other reason.</p>
				<form id="contact-page-form" name="emailform" action="php/form-post.php" method="post">
					<div>
						<label for='name'>Enter Name: </label>
						<input type="text" name="name">
					</div>
					<div>
						<label for='email'>Enter Email Address:</label>
						<input type="text" name="email">
					</div>
					<div>
						<label for='message'>Enter Message:</label>
						<textarea name="message"></textarea>
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
					<input id="submit-button" type="submit" name='submit' value="submit">
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