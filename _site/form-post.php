<?php
define('SITE_KEY', '6LcAU90UAAAAAAwVixlhO4KYsUb4Dm8YZEn7bdbc');
define('SECRET_KEY', '6LcAU90UAAAAAJ6O7LYq6N96RA2Z4kK-EgtyNcHB');

if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
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


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 