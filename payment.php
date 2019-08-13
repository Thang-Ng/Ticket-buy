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
    <script src="scripts/enhancements.js"></script>
	<title>Payment</title>
  </head>

  <body>
    <?php
		include_once ("header.inc");
		include_once ("menu.inc");
	?>

    <hr />

    <article>
      <form novalidate="novalidate" id="payment_form" method = "post" action = "process_order.php">
        <fieldset>
          <br />
            <fieldset>
              <legend>Personal details</legend>
              <p>Your Name: <span id="confirm_name"></span></p>
              <p>Email: <span id="confirm_email"></span></p>
              <p>Phone number: <span id="confirm_phone_number"></span></p>
              <p>Contact preference: <span id="confirm_contact_preference"></span></p>
              <p>Address: <span id="confirm_address"></span></p>
              <button id="billing_add">Use another address for billing address</button>
              <div id="remove_billing_add"></div>
              <div id="fill_input"></div>
            </fieldset>
            <br />
            <fieldset>
              <legend>Booking details</legend>
              <p>Movie: <span id="confirm_movie"></span></p>
              <p>Session time: <span id="confirm_session"></span></p>
              <p>Number of adult ticket(s): <span id="confirm_adult_ticket"></span></p>
              <p>Number of student ticket(s): <span id="confirm_student_ticket"></span></p>
              <p>Number of child ticket(s): <span id="confirm_child_ticket"></span></p>
              <p>Number of senior ticket(s): <span id="confirm_senior_ticket"></span></p>

              <p>TOTAL: <span id="confirm_total"></span></p>
            </fieldset>
        </fieldset>

        <input type="hidden" name="firstname" id="hidden_firstname"/>
        <input type="hidden" name="lastname" id="hidden_lastname"/>
        <input type="hidden" name="email" id="hidden_email"/>
		
		<input type="hidden" name="street" id="hidden_street"/>
		<input type="hidden" name="suburb" id="hidden_suburb"/>
        <input type="hidden" name="state" id="hidden_state"/>
        <input type="hidden" name="postcode" id="hidden_postcode"/>


        <input type="hidden" name="phone_number" id="hidden_phone_number"/>
        <input type="hidden" name="preferred_contact" id="hidden_preferred_contact"/>
        <input type="hidden" name="movie" id="hidden_movie"/>
        <input type="hidden" name="date" id="hidden_date"/>
        <input type="hidden" name="session" id="hidden_session"/>
        <input type="hidden" name="adult_ticket" id="hidden_adult_ticket"/>
        <input type="hidden" name="student_ticket" id="hidden_student_ticket"/>
        <input type="hidden" name="child_ticket" id="hidden_child_ticket"/>
        <input type="hidden" name="senior_ticket" id="hidden_senior_ticket"/>
        <input type="hidden" name="total_money" id="hidden_total_money"/>


        <br />

        <fieldset>
          <legend>Pay with credit card</legend>

          <p>
            <label for="credit_type">CARD TYPE </label>
            <select name="credit_type" id="credit_type">
              <option value="none">Please choose...</option>
              <option value="Visa">VISA</option>
              <option value="Master Card">MasterCard</option>
              <option value="American Express">American Express</option>
            </select>
          </p>

          <p>
            <label for="name_on_card">NAME ON CARD </label>
            <input type = "text" name = "name_on_card" id = "name_on_card" pattern="^[a-zA-Z ]+$" maxlength="40" required = "required" />
          </p>

          <p>
            <label for="card_number">CARD NUMBER </label>
            <input type = "text" name = "card_number" id = "card_number"  pattern="^[0-9]{15,16}$" title="Invalid card number" required = "required" />
          </p>

          <p>
            <label for="expiry">EXPIRY </label>
            <input type="text" id="expiry" name="expiry" pattern="^\d{2}-\d{2}$" placeholder="mm-yy" required="required"/>
          </p>

          <p>
            <label for="security_code">CARD SECURITY CODE (CVV) </label>
            <input type="text" id="security_code" name="security_code" required="required"/>
          </p>


        </fieldset>

        <br />
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
