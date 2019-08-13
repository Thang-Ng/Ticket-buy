<!DOCTYPE html>

<html lang="en">

  <head>
	   <meta charset="utf-8" />
	   <meta name="description" content="movie tickets purchase" />
	   <meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
	   <meta name="author" content="Ngoc Thang Nguyen" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link rel="stylesheet" href="styles/style.css"/>
	   <title>Enhancements3</title>
  </head>

  <body>
    <?php
		include_once ("header.inc");
		include_once ("menu.inc");
	?>

    <article>
      <h1>ENHANCEMENTS OF ASSIGNMENT 3</h1>

      <section>
        <h2>Automatically send confirmation email to a new member</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>Using PHPMailer library, this page will automatically send a confirmation email to a new customer.</dd>

          <dt>PHP needed</dt>
          <dd>
            <p>PHPMailer library</p>
			<p>member_register.php is used to take data from customer and send it to member_register_process.php</p>
			<p>member_register_process.php will process data and send data to send_email.php</p>
			<p>send_email.php contains settings (including sender - noreply.ticketbuy@gmail.com and receiver - customer's email)</p>
		  </dd>

          <dt>Third party source</dt>
          <dd>
            I download the library from <a href="https://github.com/PHPMailer/PHPMailer">GitHub</a> and edit for my own purposes.
          </dd>
          <dt>Whre I apply it</dt>
          <dd>
			send_email.php
          </dd>
        </dl>
      </section>

      <section>
        <h2>Login and Logout page for managers</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>
			This will make only authorized person to make changes to the database.
          </dd>

          <dt>PHP needed</dt>
          <dd>
            <p>login.php</p>
			<p>logout.php</p>
			<p>manager.php</p>
		  </dd>

          <dt>Third party source</dt>
          <dd>
			I did this on by myself.
          </dd>
          <dt>Where I apply it</dt>
          <dd>
            manager.php
          </dd>
        </dl>
      </section>

      <section>
        <h2>Using $_SESSION to determine that a manager is logging in or not</h2>
        <dl>
          <dt>How it goes beyond the basic requirements</dt>
          <dd>
			The default session of one page starts when the browser is on and ends when it is off. Using $_SESSION enables us to save data used by a specific person in a specific period which is decided by developer.
          </dd>
			
			
          <dt>PHP needed</dt>
          <dd>
            <p>session_start() to start the session in a specific page (we have to include this command in every page that the session takes place)</p>
			<p>$_SESSION["..."] is used to store data and pass it from one page to another page</p>
			<p>session_unset() end session_destroy() are used to destroy the session</p>
		  </dd>

          <dt>Third party source</dt>
          <dd>
            I take the idea from <a href="https://www.w3schools.com/php/php_sessions.asp">W3Schools</a>.
          </dd>
          <dt>Where I apply it</dt>
          <dd>
            <p>session_start() is used in manager.php, login.php, logout.php</p>
			<p>$_SESSION is used in login.php to store the username and password</p>
			<p>session_unset() end session_destroy() are used in logout.php to clear stored username and password</p>
          </dd>
        </dl>
      </section>

    </article>

    <?php
		include_once ("footer.inc");
	?>

  </body>

</html>
