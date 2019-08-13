<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="movie tickets purchase" />
	<meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
	<meta name="author" content="Ngoc Thang Nguyen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styles/style.css"/>
    <script src="scripts/part2.js"></script>
	<title>Fixing</title>
</head>
<body>
	<?php
		include_once ("header.inc");
		include_once ("menu.inc");
	?>
	
	<article>
		<h1>Order Fixing page</h1>
		
		<form method="post" action = "process_order.php">
			<fieldset>
			  <legend>Personal Details</legend>
			  <p>
				<label for="firstname">First name </label>
				<input type = "text" name = "firstname" id = "firstname"  value="<?php echo $_GET["firstname"]?>" />
			  </p>
			  <?php 
				if ($_GET["firstname_err"] != "") {
					echo $_GET["firstname_err"];
				}
			  ?>

			  <p>
				<label for="lastname">Last name </label>
				<input type="text" name="lastname" id="lastname" value="<?php echo $_GET["lastname"]?>" />
			  </p>
			  
			  <?php 
				if ($_GET["lastname_err"] != "") {
					echo $_GET["lastname_err"];
				}
			  ?>
			  
			  <p>
				<label for="email">Email </label>
				<input type="text" name="email" id="email" value = "<?php echo $_GET["email"]?>"/>
				<!--source code for pattern attribute: https://www.w3schools.com/tags/att_input_pattern.asp-->
			  </p>
			  
			  <?php 
				if ($_GET["email_err"] != "") {
					echo $_GET["email_err"];
				}
			  ?>
			  
			</fieldset>

			<br />

			<fieldset>
			  <legend>Address</legend>
			  <p>
				<label for="street">Street </label>
				<input type="text" name="street" id="street" value = "<?php echo $_GET["street"]?>"/>
			  </p>
			  
			  <?php 
				if ($_GET["street_err"] != "") {
					echo $_GET["street_err"];
				}
			  ?>

			  <p>
				<label for="suburb/town">Suburb/town </label>
				<input type="text" name="suburb" id="suburb/town" value="<?php echo $_GET["suburb"]?>"/>
			  </p>
			  
			  <?php 
				if ($_GET["suburb_err"] != "") {
					echo $_GET["suburb_err"];
				}
			  ?>
	
			  <input type="hidden" id="pass_state" value="<?php echo $_GET["state"]?>"/>
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
			  
			  <?php 
				if ($_GET["state_err"] != "") {
					echo $_GET["state_err"];
				}
			  ?>
			  <p>
				<label for="postcode">Postcode </label>
				<input type="text" name="postcode" id="postcode" value="<?php echo $_GET["postcode"]?>"/>
			  </p>
			  
			  <?php 
				if ($_GET["postcode_err"] != "") {
					echo $_GET["postcode_err"];
				}
			  ?>

			</fieldset>

			<br />

			<fieldset>
				<legend>Contact Details</legend>
				<p>
				  <label for="phone_number">Phone number </label>
				  <input type="tel" name="phone_number" id="phone_number" value="<?php echo $_GET["phone_number"]?>"/>
				</p>
				
				<?php 
				if ($_GET["phone_number_err"] != "") {
					echo $_GET["phone_number_err"];
				}
				?>
			  
				<input type="hidden" id="pass_preferred_contact" value="<?php echo $_GET["preferred_contact"]?>"/>
				<p>
				  <label>Preferred contact: </label>
				  <label><input type="radio" name="preferred_contact" id="pref_email" value="email"/>Email</label>
				  <label><input type="radio" name="preferred_contact" id="pref_post" value="post" />Post</label>
				  <label><input type="radio" name="preferred_contact" id="pref_phone" value="phone" />Phone</label>
				</p>
				
				<?php 
				if ($_GET["preferred_contact_err"] != "") {
					echo $_GET["preferred_contact_err"];
				}
				?>
			</fieldset>

			<br />

			<fieldset>
			  <legend>Booking</legend>
			  <input type="hidden" id="pass_movie" value="<?php echo $_GET["movie"]?>"/>
			  <p>
				<label for="movie">Choose movie: </label>
				<select id="movie" name="movie">
					<option value="none">Please choose...</option>
					<option value="Co Ba Sai Gon">Co Ba Sai Gon</option>
					<option value="The Girl from yesterday - Co gai den tu hom qua">The Girl from yesterday - Co gai den tu hom qua</option>
					<option value="Jailbat - Em chua 18">Jailbat - Em chua 18</option>
					<option value="Tam Cam: The untold story - Tam Cam: Chuyen chua ke">Tam Cam: The untold story - Tam Cam: Chuyen chua ke</option>
					<option value="Teo Em">Teo Em</option>
					<option value="Yellow flowers on the green grass - Toi thay hoa vang tren co xanh">Yellow flowers on the green grass - Toi thay hoa vang tren co xanh</option>
				</select>
			  </p>
			  
			  <?php 
				if ($_GET["movie_err"] != "") {
					echo $_GET["movie_err"];
				}
			  ?>
			  
			  <input type="hidden" id="pass_date" value="<?php echo $_GET["date"]?>"/>
			  <p>
				<label for="date">Choose date: </label>
				<select id="date" name="date">
				  <option value="none">Please choose</option>
				  <option value="today" id="today">Today</option>
				  <option value="tomorrow" id="tomorrow">Tomorrow</option>
				  <option value="after_tomorrow" id="after_tomorrow">After tomorrow</option>
				</select>
			  </p>
			  
			  <?php 
				if ($_GET["date_err"] != "") {
					echo $_GET["date_err"];
				}
			  ?>
				
			  <input type="hidden" id="pass_session" value="<?php echo $_GET["session"]?>"/>
			  <p>
				<label for="session">Session time: </label>
				<select id="session" name="session">
				  <option value="none">Please choose</option>
				  <option value="8:30am">8:30am</option>
				  <option value="12:00pm">12:00pm</option>
				  <option value="15:00pm">15:00pm</option>
				  <option value="18:00pm">18:00pm</option>
				  <option value="20:00pm">20:00pm</option>
				</select>
			  </p>
			  
			  <?php 
				if ($_GET["session_err"] != "") {
					echo $_GET["session_err"];
				}
			  ?>

			  <fieldset>
				<legend>Ticket details</legend>
				<p>
				  <label for="adult_ticket">ADULT </label>
				  <?php 
					$adult_ticket = $_GET["adult_ticket"];
					echo "<input type=\"number\" class=\"ticket_quantity\" id=\"adult_ticket\" name=\"adult_ticket\" size=\"3\" value=\"{$adult_ticket}\"/>";
				  ?>
				</p>
				<p>$20</p>
				
				<?php 
				if ($_GET["adult_ticket_err"] != "") {
					echo $_GET["adult_ticket_err"];
				}
				?>

				<hr />

				<p>
				  <label for="student_ticket">STUDENT </label>
					<input type="number" class="ticket_quantity" id="student_ticket" name="student_ticket" size="3" value="<?php echo $_GET["student_ticket"]?>"/>
				</p>
				<p>$17</p>
				
				<?php 
				if ($_GET["student_ticket_err"] != "") {
					echo $_GET["student_ticket_err"];
				}
				?>

				<hr />

				<p>
				  <label for="child_ticket">CHILD (AGED 3-14) </label>
					<input type="number" class="ticket_quantity" id="child_ticket" name="child_ticket" size="3" value="<?php echo $_GET["child_ticket"]?>"/>
					<!--<p id="child_ticket"></p>-->
				</p>
				<p>$15</p>
				
				<?php 
				if ($_GET["child_ticket_err"] != "") {
					echo $_GET["child_ticket_err"];
				}
				?>

				<hr />

				<p>
				  <label for="senior_ticket">SENIOR </label>
					<input type="number" class="ticket_quantity" id="senior_ticket" name="senior_ticket" size="3" value="<?php echo $_GET["senior_ticket"]?>"/>
				</p>
				<p>$16</p>
				
				<?php 
				if ($_GET["senior_ticket_err"] != "") {
					echo $_GET["senior_ticket_err"];
				}
				?>

				<hr />
				
				<p>TOTAL: <span><?php $_GET["total_money"]?></span></p>

				
				<?php 
				if ($_GET["total_money_err"] != "") {
					echo $_GET["total_money_err"];
				}
				?>
				
				<input type="hidden" name="total_money" id="hidden_total_money" value="<?php $_GET["total_money"]?>"/>


			  </fieldset>
			</fieldset>
			
			<br />
			
			<fieldset>
			  <legend>Credit card information</legend>

			  <p>
				<label for="credit_type">CARD TYPE </label>
				<select name="credit_type" id="credit_type">
				  <option value="none">Please choose...</option>
				  <option value="visa">VISA</option>
				  <option value="master_card">MasterCard</option>
				  <option value="american_express">American Express</option>
				</select>
			  </p>
			  
			  <?php 
				if ($_GET["credit_type_err"] != "") {
					echo $_GET["credit_type_err"];
				}
			  ?>

			  <p>
				<label for="name_on_card">NAME ON CARD </label>
				<input type = "text" name = "name_on_card" id = "name_on_card" />
			  </p>
			  
			  <?php 
				if ($_GET["name_on_card_err"] != "") {
					echo $_GET["name_on_card_err"];
				}
			  ?>

			  <p>
				<label for="card_number">CARD NUMBER </label>
				<input type = "text" name = "card_number" id = "card_number" />
			  </p>
			  
			  <?php 
				if ($_GET["card_number_err"] != "") {
					echo $_GET["card_number_err"];
				}
			  ?>

			  <p>
				<label for="expiry">EXPIRY </label>
				<input type="text" id="expiry" name="expiry"/>
			  </p>
			  
			  <?php 
				if ($_GET["expiry_err"] != "") {
					echo $_GET["expiry_err"];
				}
			  ?>

			  <p>
				<label for="security_code">CARD SECURITY CODE (CVV) </label>
				<input type="text" id="security_code" name="security_code"/>
			  </p>
			  
			  <?php 
				if ($_GET["security_code_err"] != "") {
					echo $_GET["security_code_err"];
				}
			  ?>
			</fieldset>
			
			<p>
				<input type="submit" id="check_out" value="CHECK OUT" />
				<input type="reset" id="cancel_order" value="CANCEL ORDER" />
			</p>
		</form>
	</article>
	
	<?php 
		include_once ("footer.inc");
	?>
</body>
</html>