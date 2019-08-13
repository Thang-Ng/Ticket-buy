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
    <script src="scripts/part2.js"></script>
  </head>

  <body>
    <?php
		include_once ("header.inc");
		include_once ("menu.inc");
	?>

    <article>
      <h1>Booking</h1>

      <form id="bookform" method = "post" action = "payment.php" novalidate="novalidate">
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
          <legend>Booking</legend>
          <p>
            <label for="choose_movie">Choose movie: </label>
            <select id="choose_movie" name="choose_movie">
              <option value="none">Please choose...</option>
              <option value="Co Ba Sai Gon">Co Ba Sai Gon</option>
              <option value="The Girl from yesterday - Co gai den tu hom qua">The Girl from yesterday - Co gai den tu hom qua</option>
              <option value="Jailbat - Em chua 18">Jailbat - Em chua 18</option>
              <option value="Tam Cam: The untold story - Tam Cam: Chuyen chua ke">Tam Cam: The untold story - Tam Cam: Chuyen chua ke</option>
              <option value="Teo Em">Teo Em</option>
              <option value="Yellow flowers on the green grass - Toi thay hoa vang tren co xanh">Yellow flowers on the green grass - Toi thay hoa vang tren co xanh</option>
            </select>
          </p>
          <p>
            <label for="date">Choose date: </label>
            <select id="date" name="date">
              <option value="none">Please choose</option>
              <option value="today" id="today">Today</option>
              <option value="tomorrow" id="tomorrow">Tomorrow</option>
              <option value="after_tomorrow" id="after_tomorrow">After tomorrow</option>
            </select>
          </p>
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

          <fieldset>
            <legend>Ticket details</legend>
            <p>
              <label for="adult_ticket">ADULT </label>
                <input type="number" class="ticket_quantity" id="adult_ticket" name="adult_ticket" size="3" value="0"/>
            </p>
            <p>$20</p>

            <hr />

            <p>
              <label for="student_ticket">STUDENT </label>
                <input type="number" class="ticket_quantity" id="student_ticket" name="student_ticket" size="3" value="0"/>
            </p>
            <p>$17</p>

            <hr />

            <p>
              <label for="child_ticket">CHILD (AGED 3-14) </label>
                <input type="number" class="ticket_quantity" id="child_ticket" name="child_ticket" size="3" value="0"/>
                <!--<p id="child_ticket"></p>-->
            </p>
            <p>$15</p>

            <hr />

            <p>
              <label for="senior_ticket">SENIOR </label>
                <input type="number" class="ticket_quantity" id="senior_ticket" name="senior_ticket" size="3" value="0"/>
            </p>
            <p>$16</p>

            <hr />

          </fieldset>
        </fieldset>

        <br />

        
        <p>
          <input type="submit" value="PAY NOW" />
          <input type="reset" value="CLEAR" />
        </p>
      </form>
    </article>

    <?php
		include_once ("footer.inc");
	?>

  </body>

</html>
