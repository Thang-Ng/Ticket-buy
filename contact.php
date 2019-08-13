<!DOCTYPE html>

<html lang="en">

  <head>
	   <meta charset="utf-8" />
	   <meta name="description" content="movie tickets purchase" />
	   <meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
	   <meta name="author" content="Ngoc Thang Nguyen" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" href="styles/style.css"/>
	   <title>Enquire</title>
  </head>

  <body>
    <?php
		include_once ("header.inc");
		include_once ("menu.inc");
	?>

    <article>
      <h1>Enquire</h1>

      <form method = "post" action = "https://mercury.swin.edu.au/it000000/formtest.php">
        <fieldset>
          <legend>Personal Details</legend>
          <p>
            <label for="firstname">First name </label>
            <input type = "text" name = "firstname" id = "firstname" pattern="[a-zA-Z ]+" maxlength = "25" placeholder="First Name" required = "required" />
          </p>

          <p>
            <label for="lastname">Last name </label>
            <input type="text" name="lastname" id="lastname" pattern="[a-zA-Z ]+" maxlength="25" placeholder="Last Name" required="required" />
          </p>

          <p>
            <label for="email">Email </label>
            <input type="text" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required="required"/>
            <!--source code for pattern attribute: https://www.w3schools.com/tags/att_input_pattern.asp-->
          </p>
        </fieldset>

        <br />

        <fieldset>
          <legend>Address</legend>
          <p>
            <label for="street">Street </label>
            <input type="text" name="street" id="street" pattern="[a-zA-Z0-9 ,-]+" maxlength="40" required="required"/>
          </p>

          <p>
            <label for="suburb/town">Suburb/town </label>
            <input type="text" name="suburb/town" id="suburb/town" pattern="[a-zA-Z ,-]+" maxlength="20" required="required"/>
          </p>

          <p>
            <label for="state">State </label>
            <select name="state" id="state" required="required">
              <option value="">Please choose...</option>
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

        <br />

        <fieldset>
            <legend>Contact Details</legend>
            <p>
              <label for="phone_number">Phone number </label>
              <input type="tel" name="phone_number" id="phone_number" pattern="[0-9]{1,10}" placeholder="Phone number" required="required"/>
            </p>

            <p>
              <label>Preferred contact: </label>
              <label><input type="radio" name="preferred_contact" value="email" checked="checked"/>Email</label>
              <label><input type="radio" name="preferred_contact" value="post" />Post</label>
              <label><input type="radio" name="preferred_contact" value="phone" />Phone</label>
            </p>
        </fieldset>

        <br />

        <fieldset>
          <legend>Enquiry</legend>
          <p>
            <label for="category">Category: </label>
            <select name="category" id="category" required="required">
              <option value="">Please choose...</option>
              <option value="services">Services</option>
              <option value="ticket_price">Ticket price</option>
              <option value="location">Location</option>
              <option value="refund">Refund</option>
              <option value="food">Food</option>
              <option value="drink">Drink</option>
          </select>
        </p>
        <p>
          <label><input type="checkbox" name="product_feature[]" value="dissapointed" checked="checked"/>You are dissapointed with our services</label> <br />
          <label><input type="checkbox" name="product_feature[]" value="refund" />You want a refund</label> <br />
          <label><input type="checkbox" name="product_feature[]" value="see_manager" />You want to see manager to give comments</label> <br />
          <label><input type="checkbox" name="product_feature[]" value="food_problem" />There are some problems with our food</label> <br />
          <label><input type="checkbox" name="product_feature[]" value="beverage_problem" />There are some problems with our beverages </label> <br />
        </p>
          <p>Please give us your comments to specify your ennquiry</p>
          <textarea rows="9" cols="40" placeholder="Plese write your comment..."></textarea>
        </fieldset>
        <p>
          <input type="submit" value="SUBMIT" />
          <input type="reset" value="CLEAR" />
        </p>
      </form>
    </article>

    <?php
		include_once ("footer.inc");
	?>

  </body>

</html>
