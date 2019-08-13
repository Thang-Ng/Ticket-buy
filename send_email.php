<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="movie tickets purchase" />
		<meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
		<meta name="author" content="Ngoc Thang Nguyen" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="styles/style.css"/>
		<title>Sending email</title>
	</head>
	
	<body>
		<?php
			include_once ("header.inc");
			include_once ("menu.inc");
			
			error_reporting(0);
		?>
		
		<?php
		$receiver = $_GET["email"];
		$content = $_GET["email_content"];
		
		include "PHPMailer/src/PHPMailer.php";
		include "PHPMailer/src/Exception.php";
		include "PHPMailer/src/OAuth.php";
		include "PHPMailer/src/POP3.php";
		include "PHPMailer/src/SMTP.php";	
		// Import PHPMailer classes into the global namespace
		// These must be at the top of your script, not inside a function
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		//Load Composer's autoloader
		
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
			//Server settings
			$mail->SMTPDebug = 2;                                 // Enable verbose debug output
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'noreply.ticketbuy@gmail.com';                 // SMTP username
			$mail->Password = 'ticketbuy';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			
			
			//Recipients
			$mail->setFrom('noreply.ticketbuy@gmail.com', 'TicketBuy Ltd,');
			$mail->addAddress($receiver);     // Add a recipient
			//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'Confirmation Email';
				$mail->Body    = $content;
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				$mail->send();
				
				$msg = "<p>Registered successfully!</p>\n<p>A confirmation email has been sent to you</p>\n";
			} catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		?>
		
		<article>
			<form method="post" action="send_email.php">
				<?php echo $msg ?>
				<p><input type="submit" name="back" value="Back"/></p>
			</form>
		</article>
		
		<?php
			if ($_POST["back"] == "Back") {
				header("location: member_register.php");
			}
		?>
		<section class="bottom_footer">
			<?php
				include("footer.inc");
			?>
		</section>
	</body>
	
</html>