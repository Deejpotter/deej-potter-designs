<?php
define('SITE_KEY', '6LcAU90UAAAAAAwVixlhO4KYsUb4Dm8YZEn7bdbc');
define('SECRET_KEY', '6LcAU90UAAAAAJ6O7LYq6N96RA2Z4kK-EgtyNcHB');

if ($_POST) {
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	//Validate first
	if (empty($name) || empty($visitor_email)) {
		echo "Name and email are mandatory!";
		exit;
	}

	if (IsInjected($visitor_email)) {
		echo "Bad email value!";
		exit;
	}

	function getCaptcha($SecretKey)
	{
		$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . SECRET_KEY . "&response={$SecretKey}");
		$Return = json_decode($Response);
		return $Return;
	}
	$Return = getCaptcha($_POST['g-recaptcha-response']);

	if ($Return->success == true && $Return->score > 0.5) {

		$email_from = 'deej@deejpotterdesigns.com'; //<== update the email address
		$email_subject = "New Form submission";
		$email_body = "You have received a new message from the user $name.\n
  Email: \n
  $visitor_email \n
  Here is the message: \n
  $message.";

		$to = "deejpotter@gmail.com"; //<== update the email address
		$headers = "From: $email_from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		//Send the email!
		mail($to, $email_subject, $email_body, $headers);
		//done. redirect to thank-you page.
		header('Location: thank-you.php');
	}
}


// Function to validate against any email injection attempts
function IsInjected($str)
{
	$injections = array(
		'(\n+)',
		'(\r+)',
		'(\t+)',
		'(%0A+)',
		'(%0D+)',
		'(%08+)',
		'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if (preg_match($inject, $str)) {
		return true;
	} else {
		return false;
	}
}

$fileLevel = "";
$title = "Contact me | Deej Potter Designs";
$description = "If you know what you want then it's time to contact me. You can find a form here to contact me for a quote or just to give me some feedback.";
$link = "https://deejpotterdesigns.com/contact.php";
$image = "https://deejpotterdesigns.com/images/logo.png";
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
				<form id="emailform" name="emailform" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
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
					<!-- Hidden Recaptcha input -->
					<input type="hidden" id='g-recaptcha-response' name='g-recaptcha-response'>
					<input id="submit-button" class="btn btn-primary shadow" name='form-submit' value="Contact me">
				</form>
			</div>
		</div>
	</section>


</main>

<!-- reCaptcha script -->
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
<script language="JavaScript">
	// Code for validating the form
	// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
	// for details
	var frmvalidator = new Validator("emailform");
	frmvalidator.addValidation("name", "req", "Please provide your name");
	frmvalidator.addValidation("email", "req", "Please provide your email");
	frmvalidator.addValidation("email", "email", "Please enter a valid email address");
</script>

<!-- reCaptcha -->
<script>
	let submitted = false;
	$('#submit-button').click(function(e) {
		e.preventDefault();
		console.log("Got the submit function.");
		grecaptcha.ready(function() {
			grecaptcha.execute('<?php echo SITE_KEY; ?>', {
				action: 'submit'
			}).then(function(token) {
				// Add your logic to submit to your backend server here.
				$('#g-recaptcha-response').val(token);
				$("#emailform").submit();
				console.log("Submitted");
			});
		});
	});
</script>

<?php include "templates/footer.php" ?>