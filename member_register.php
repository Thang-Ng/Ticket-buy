<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="movie tickets purchase" />
		<meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
		<meta name="author" content="Ngoc Thang Nguyen" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="styles/style.css"/>
		<title>Member register page</title>
	</head>
	
	<body>
		<?php
			include_once ("header.inc");
			include_once ("menu.inc");
			
			error_reporting(0);
		?>
		
		<article>
			<h1>Member Register Form</h1>
			
			<p><?php if ($_GET["errMsg"] != "") {echo $_GET["errMsg"];}?></p>
						
			<form id="register_form" method="post" action="member_register_process.php">
				<fieldset>
				  <legend>Personal Details</legend>
				  <p>
					<label for="firstname">First name </label>
					<input type = "text" name = "firstname" id = "firstname" pattern="[a-zA-Z ]+" maxlength = "25" placeholder="First Name" <?php if (isset($_GET["firstname"]) && $_GET["firstname"] != ""){echo "value=\"{$_GET["firstname"]}\"";}?> required = "required" />
				  </p>

				  <p>
					<label for="lastname">Last name </label>
					<input type="text" name="lastname" id="lastname" pattern="[a-zA-Z ]+" maxlength="25" placeholder="Last Name" <?php if (isset($_GET["lastname"]) && $_GET["lastname"] != ""){echo "value=\"{$_GET["lastname"]}\"";}?> required="required" />
				  </p>
				  
				  <p>
					<label for="birthday">Birthday</label>
					<input type="date" name="birthday" id="birthday" <?php if (isset($_GET["birthday"]) && $_GET["birthday"] != ""){echo "value=\"{$_GET["birthday"]}\"";}?> required="required"/>
				  </p>
				  
				  <p>
					<label for="gender">Gender</label>
					<select name ="gender" id="gender" <?php if (isset($_GET["gender"])&& $_GET["gender"] != ""){echo "value=\"{$_GET["gender"]}\"";}?>>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="unspecified">Unspecified</option>
					</select>
				  </p>

				  <p>
					<label for="email">Email </label>
					<input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" <?php if (isset($_GET["email"])&&$_GET["email"] != ""){echo "value=\"{$_GET["email"]}\"";}?> required="required"/>
					<!--source code for pattern attribute: https://www.w3schools.com/tags/att_input_pattern.asp-->
				  </p>
				  
				  <p>
					<label for="phone_number">Phone number </label>
					<input type="tel" name="phone_number" id="phone_number" pattern="[0-9]{10}" placeholder="Phone number" <?php if (isset($_GET["phone_number"])&&$_GET["phone_number"] != ""){echo "value=\"{$_GET["phone_number"]}\"";}?> required="required"/>
				  </p>
				</fieldset>
				
				<br />
				
				<fieldset>
				  <legend>Post Address</legend>
				  <p>
					<label for="street">Street </label>
					<input type="text" name="street" id="street" pattern="[a-zA-Z0-9 ,-]+" maxlength="40" <?php if (isset($_GET["street"])&&$_GET["street"] != ""){echo "value=\"{$_GET["street"]}\"";}?> required="required"/>
				  </p>

				  <p>
					<label for="suburb/town">Suburb/town </label>
					<input type="text" name="suburb/town" id="suburb/town" pattern="[a-zA-Z ,-]+" maxlength="20" <?php if (isset($_GET["suburb"])&&$_GET["suburb"] != ""){echo "value=\"{$_GET["suburb"]}\"";}?> required="required"/>
				  </p>

				  <p>
					<label for="state">State </label>
					<select name="state" id="state">
					  <option value="none">Please choose...</option>
					  <option value="VIC">VIC</option>
					  <option value="NSW">NSW</option>
					  <option value="QLD">QLD</option>
					  <option value="NT">NT</option>
					  <option value="WA">WA</option>
					  <option value="SA">SA</option>
					  <option value="TAS">TAS</option>
					  <option value="ACT">ACT</option>
					</select>
				  </p>

				  <p>
					<label for="postcode">Postcode </label>
					<input type="text" name="postcode" id="postcode" pattern="[0-9]{4}" title="Please enter the corect postcode" required="required" />
				  </p>
				  
				</fieldset>	
				
				<p><input type="submit" value="Submit"/></p>
			</form>
		</article>
		
		<section class="bottom_footer">
			<?php
				include("footer.inc");
			?>
		</section>
	</body>
</html>
