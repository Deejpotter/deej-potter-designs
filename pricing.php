<?php 
$fileLevel = "";
$title = "Pricing";

include "./header.php" 
?>


<main id="main">
	  
	<!-- Hero section -->
	<section class="pricing-image hero inset-background-left">
		<div class="content-wrapper-horizontal">
			<div class="content-wrapper-vertical">
				<h1>Prices</h1>
				<p>On this page you can find information about my prices as well as a form to get a quick quote.</P>
				<i class="fas fa-chevron-down"></i>
			</div>
		</div>
	</section>		

	<!-- Content section -->
	<section>
		<div class="content-wrapper-horizontal">
			<div class="content-wrapper-vertical">
				<h2>Get an instant quote</h2>
				<p>Choose the number of pages you need (just take a guess if you aren't sure, 
				you may need more or less than you think). Next choose a level of hosting for after your 
				website is done. Finally, choose any addons you want and if you need copywriting for your web pages. 
				You will then see an estimated price below the form.</p>
				<p>Remember that this is just an estimate, to get a 
				proper quote you'll need to contact me and have a full asessment done.</p>

				<form id="pricing-form" name="pricing-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<div>
						<label for='pages'>Select number of pages:</label>
						<input type="number" name="pages" id = "pages" oninput="getTotal()">
					</div>
					<div>
						<label for='hosting'>Select level of hosting:</label>
						<select name="hosting" id="hosting" onchange="getHostingTotal()">
							<option value="none">None</option>
							<option value="basic">Just hosting - $10 per month</option>
							<option value="analytics">Hosting and analytics - $30 per month</option>
							<option value="marketing">Digital marketing package - $100 per month</option>
						</select>
					</div>
					<div class="checkbox-form-section">
						<div>
							<label for='database'>Database integration - $100</label>
							<input type="checkbox" name="database" id="database" value="100" onchange="getTotal()"/>
						</div>

						<div>
							<label for='spreadsheet'>Spreadsheet content editing - $100</label>
							<input type="checkbox" name="spreadsheet" id="spreadsheet" value="100" onchange="getTotal()"/>
						</div>

						<div>
							<label for='copywriting'>Copywriting - $50 per page</label>
							<input type="checkbox" name="copywriting" id="copywriting" value="50" onchange="getTotal()"/>
						</div>
					</div>
					<div id="cost-section">
						<p id="total-cost">Total cost = $0</p>
						<p id="monthly-cost">Monthly cost = $0</p>
					</div>
					<div>
						<p>If this sounds good or you want a more accurate quote click the button below to get started.</p>
						<a href="contact.php" class="main-header-contact">Contact me</a>
					</div>	
				</form>
			</div>
		</div>
	</section>

<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>				
<script language="JavaScript">
	// Code for validating the form
	// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
	// for details
	var frmvalidator  = new Validator("pricing-form");
	frmvalidator.addValidation("pages","req"); 
	frmvalidator.addValidation("hosting","req"); ; 
</script>	

<script language="JavaScript" src="js/pricing.js" type="text/javascript"></script>
</main>

<?php include "./footer.php" ?>