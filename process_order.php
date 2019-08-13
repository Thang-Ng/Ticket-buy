<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="movie tickets purchase" />
		<meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
		<meta name="author" content="Ngoc Thang Nguyen" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="styles/style.css"/>
		<title>Process page</title>
	</head>
	
	<body>
		<?php
			include_once ("header.inc");
			include_once ("menu.inc");
		?>
		
		<h1>Order processing page</h1>

		<?php
		
			error_reporting(0);
			$errMsg = "";
			
			function sanitise_input($data) {
				$data = trim($data);
				$data = stripslashes ($data);
				$data = htmlspecialchars($data);
			return $data;
			}
			
			
			/*customer info validation*/
			if (isset($_POST["firstname"])) {
				$firstname = $_POST["firstname"];
				$firstname = sanitise_input($firstname);
				
				$firstname_err = "";
				
				if ($firstname == "") {
					$errMsg .= "<p>Please enter your first name</p>";
					$firstname_err .= "<p class=\"fix_msg\">Please enter your first name</p>";
				} else if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
					$errMsg .= "<p>Only alpha letters are allowed in your first name.</p>";
					$firstname_err .= "<p class=\"fix_msg\">Only alpha letters are allowed in your first name.</p>";
				} else if (!preg_match("/[a-zA-Z ]{0,25}/", $firstname)) {
					$errMsg .= "<p>Your first name cannot exceed 25 characters.</p>";
					$firstname_err .= "<p class=\"fix_msg\">Your first name cannot exceed 25 characters.</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["lastname"])) {
				$lastname = $_POST["lastname"];
				$lastname = sanitise_input($lastname);
				
				$lastname_err = "";
				
				if ($lastname == "") {
					$errMsg .= "<p>Please enter your last name</p>";
					$lastname_err .= "<p class=\"fix_msg\">Please enter your last name</p>";
				} else if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
					$errMsg .= "<p>Only alpha letters are allowed in your last name.</p>";
					$lastname_err .= "<p class=\"fix_msg\">Only alpha letters are allowed in your last name</p>";
				} else if (!preg_match("/[a-zA-Z ]{0,25}/", $lastname)) {
					$errMsg .= "<p>Your last name cannot exceed 25 characters.</p>";
					$lastname_err .= "<p class=\"fix_msg\">Your last name cannot exceed 25 characters</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["email"])) {
				$email = $_POST["email"];
				$email = sanitise_input($email);
				
				$email_err = "";
				
				if ($email == ""){
					$errMsg .= "<p>Please enter your email.</p>";
					$email_err .= "<p class=\"fix_msg\">Please enter your email</p>";
				} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$errMsg .= "<p>Invalid email.</p>";
					$email_err .= "<p class=\"fix_msg\">Invalid email</p>";
				} 
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["street"])) {
				$street = $_POST["street"];
				$street = sanitise_input($street);
				
				$street_err = "";
				
				if ($street == ""){
					$errMsg .= "<p>Please enter your street address.</p>";
					$street_err .= "<p class=\"fix_msg\">Please enter your street address</p>";
				} else if (!preg_match("/[a-zA-Z0-9 -,]{0,40}/", $street)) {
					$errMsg .= "<p>Invalid street address.</p>";
					$street_err .= "<p class=\"fix_msg\">Invalid street address</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["suburb"])) {
				$suburb = $_POST["suburb"];
				$suburb = sanitise_input($suburb);
				
				$suburb_err = "";
				
				if ($suburb == ""){
					$errMsg .= "<p>Please enter your suburb/town address</p>";
					$suburb_err .= "<p class=\"fix_msg\">Please enter your suburb/town address</p>";
				} else if (!preg_match("/[a-zA-Z0-9 -,]{0,40}/", $street)) {
					$errMsg .= "<p>Invalid suburb/town address</p>";
					$suburb_err .= "<p class=\"fix_msg\">Invalid suburb/town address</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["state"])) {
				$state = $_POST["state"];
				$state = sanitise_input($state);
				
				$state_err = "";
				
				if ($state == ""){
					$errMsg .= "<p>Please choose your state</p>";
					$state_err .= "<p class=\"fix_msg\">Please choose your state</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["postcode"])) {
				$postcode = $_POST["postcode"];
				$postcode = sanitise_input($postcode);
				
				$postcode_err = "";
				
				if ($postcode == ""){
					$errMsg .= "<p>Please please enter your postcode.</p>";
					$postcode_err .= "<p class=\"fix_msg\">Please please enter your postcode</p>";
				} else if (!preg_match("/[0-9]{4}/", $postcode)) {
					$errMsg .= "<p>Invalid postcode.</p>";
					$postcode_err .= "<p class=\"fix_msg\">Invalid postcode</p>";
				}
				
				switch ($state) {
					case "none":
					  $errMsg .= "<p>Please choose your state.</p>";
					  $postcode_err .= "<p class=\"fix_msg\">Please choose your state</p>";
					  break;
					case "VIC":
					  if (!preg_match("/^3[0-9]{3}$/", $postcode) && !preg_match("/^8[0-9]{3}$/", $postcode)) {
						$errMsg .= "<p>Postcode does not match.</p>";
						$postcode_err .= "<p class=\"fix_msg\">Postcode does not match</p>";
					  }
					  break;
					case "NSW":
					  if (!preg_match("/^1[0-9]{3}$/", $postcode) && !preg_match("/^2[0-9]{3}$/", $postcode)) {
						$errMsg .= "<p>Postcode does not match.</p>";
						$postcode_err .= "<p class=\"fix_msg\">Postcode does not match</p>";
					  }
					  break;
					case "QLD":
					  if (!preg_match("/^4[0-9]{3}$/", $postcode) && !preg_match("/^9[0-9]{3}$/", $postcode)) {
						$errMsg .= "<p>Postcode does not match.</p>";
						$postcode_err .= "<p class=\"fix_msg\">Postcode does not match</p>";
					  }
					  break;
					case "NT":
					  if (!preg_match("/^0[0-9]{3}$/", $postcode)) {
						$errMsg .= "<p>Postcode does not match.</p>";
						$postcode_err .= "<p class=\"fix_msg\">Postcode does not match</p>";
					  }
					  break;
					case "WA":
					  if (!preg_match("/^6[0-9]{3}$/", $postcode)) {
						$errMsg .= "<p>Postcode does not match.</p>";
					  }
					  break;
					case "SA":
					  if (preg_match("/^5[0-9]{3}$/", $postcode)) {
						$errMsg .= "<p>Postcode does not match</p>";
						$postcode_err .= "<p class=\"fix_msg\">Postcode does not match</p>";
					  }
					  break;
					case "TAS":
					  if (preg_match("/^7[0-9]{3}$/", $postcode)) {
						$errMsg .= "<p>Postcode does not match.</p>";
						$postcode_err .= "<p class=\"fix_msg\">Postcode does not match</p>";
					  }
					  break;
					case "ACT":
					  if (preg_match("/^0[0-9]{3}$/", $postcode)) {
						$errMsg .= "<p>Postcode does not match.</p>";
						$postcode_err .= "<p class=\"fix_msg\">Postcode does not match</p>";
					  }
					  break;
				}	
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["phone_number"])) {
				$phone_number = $_POST["phone_number"];
				$phone_number = sanitise_input($phone_number);
				
				$phone_number_err = "";
				
				if ($phone_number == ""){
					$errMsg .= "<p>Please enter your phone number.</p>";
					$phone_number_err .= "<p class=\"fix_msg\">Please enter your phone number</p>";
				} else if (!preg_match("/^[0-9]{10}$/", $phone_number)) {
					$errMsg .= "<p>Invalid phone number.</p>";
					$phone_number_err .= "<p class=\"fix_msg\">Invalid phone number</p>";
				}
			} else {
				header ("location: enquire.php");
			}	
			
			if (isset($_POST["preferred_contact"])) {
				$pref_contact = $_POST["preferred_contact"];
				$pref_contact = sanitise_input($pref_contact);
				
				$pref_contact_err = "";
				
				if ($pref_contact == ""){
					$errMsg .= "<p>Please choose a preferred contact.</p>";
					$pref_contact_err = "<p class=\"fix_msg\">Please choose a preferred contact</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["movie"])) {
				$movie = $_POST["movie"];
				$movie = sanitise_input($movie);
				
				$movie_err = "";
				
				if ($movie == "none") {
					$errMsg .= "<p>Please choose a movie.</p>";
					$movie_err .= "<p class=\"fix_msg\">Please choose a movie</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset($_POST["date"])) {
				$date = $_POST["date"];
				$date = sanitise_input($date);
				
				$date_err = "";
				
				if ($date == "none") {
					$errMsg .= "<p>Please choose a date.</p>";
					$date_err .= "<p class=\"fix_msg\">Please choose a date</p>";
				}
			} else {
				header ("location: enquire.php");
			}

			if (isset($_POST["session"])) {
				$session = $_POST["session"];
				$session = sanitise_input($session);
				
				$session_err = "";
				
				if ($session == "none") {
					$errMsg .= "<p>Please choose a session.</p>";
					$session_err .= "<p class=\"fix_msg\">Please choose a session</p>";
				}
			} else {
				header ("location: enquire.php");
			}		
			
			if (isset ($_POST["adult_ticket"])) {
				$adult_ticket = $_POST["adult_ticket"];
				$adult_ticket = sanitise_input($adult_ticket);
				
				$adult_ticket_err = "";
				
				if ($adult_ticket < 0) {
					$errMsg .= "Ticket number cannot be smaller than 0.</p>";
					$adult_ticket_err .= "<p class=\"fix_msg\">Ticket number cannot be smaller than 0</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset ($_POST["student_ticket"])) {
				$student_ticket = $_POST["student_ticket"];
				$student_ticket = sanitise_input($student_ticket);
				
				$student_ticket_err = "";
				
				if ($student_ticket < 0) {
					$errMsg .= "Ticket number cannot be smaller than 0.</p>";
					$student_ticket_err .= "<p class=\"fix_msg\">Ticket number cannot be smaller than 0</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset ($_POST["child_ticket"])) {
				$child_ticket = $_POST["child_ticket"];
				$child_ticket = sanitise_input($child_ticket);
				
				$child_ticket_err = "";
				
			if ($child_ticket < 0) {
					$errMsg .= "Ticket number cannot be smaller than 0.</p>";
					$child_ticket_err .= "<p class=\"fix_msg\">Ticket number cannot be smaller than 0</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset ($_POST["senior_ticket"])) {
				$senior_ticket = $_POST["senior_ticket"];
				$senior_ticket = sanitise_input($senior_ticket);
				
				$senior_ticket_err = "";
				if ($senior_ticket < 0) {
					$errMsg .= "Ticket number cannot be smaller than 0.</p>";
					$senior_ticket_err .= "<p class=\"fix_msg\">Ticket number cannot be smaller than 0</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			if (isset ($_POST["total_money"])) {
				$total_money = $_POST["total_money"];
				$total_money = sanitise_input($total_money);
								
				$total_money = intval($adult_ticket)*20 + intval($student_ticket)*17 + intval($child_ticket)*15 + intval($senior_ticket)*16;
				$total_money_err = "";
				
				if ($total_money == 0) {
					$errMsg .= "<p>Please select at least one ticket.</p>";
					$total_money_err .= "<p class=\"fix_msg\">Please select at least one ticket</p>";
				}
			} else {
				header ("location: enquire.php");
			}
			
			/*credit card validation*/
			if (isset($_POST["name_on_card"]) && isset($_POST["credit_type"]) && isset($_POST["card_number"]) && isset($_POST["security_code"])) {
				$name_on_card = $_POST["name_on_card"];
				$name_on_card = sanitise_input($name_on_card);
				$name_on_card_err ="";
				if ($name_on_card == "") {
					$name_on_card_err .= "<p class=\"fix_msg\">Please enter name on card</p>";
				} else if (!preg_match("/^[a-zA-Z ]*$/", $name_on_card)) {
					$name_on_card_err .= "<p class=\"fix_msg\">Only alpha letters are allowed</p>";
				} else if (!preg_match("/[a-zA-Z ]{0,40}/", $name_on_card)) {
					$name_on_card_err .= "<p class=\"fix_msg\">The name on card cannot exceed 40 characters</p>";
				}
			
				$credit_type = $_POST["credit_type"];
				$credit_type = sanitise_input($credit_type);
				$credit_type_err = "";
				
				$card_number = $_POST["card_number"];
				$card_number = sanitise_input($card_number);
				$card_number_err = "";
				if ($card_number == "") {
					$card_number_err .= "<p class=\"fix_msg\">Please enter your card number</p>";
				}
				
				
				$security_code = $_POST["security_code"];
				$security_code = sanitise_input($security_code);
				$security_code_err = "";
				if ($security_code == "") {
					$security_code_err .= "<p class=\"fix_msg\">Please enter your security code</p>";
				}
				
				switch ($credit_type) {
					case "none":
						$errMsg .= "<p>Please choose Credit Card type.</p>";
						$credit_type_err .= "<p class=\"fix_msg\">Please choose Credit Card type</p>";
						break;
					case "Visa":
						if (!preg_match("/^4[0-9]{15}$/",$card_number)) {
							$errMsg .= "<p>Card number does not match Card type.</p>";
							$card_number_err .= "<p class=\"fix_msg\">Card number does not match Card type</p>";
						}
						
						if (!preg_match("/^[0-9]{3}$/",$security_code)) {
							$errMsg .= "<p>Invalid security code.</p>";
							$security_code_err .= "<p class=\"fix_msg\">Invalid security code</p>";
						}
						break;
					case "Master Card":
						if (!preg_match("/^5[1-5][0-9]{14}$/",$card_number)) {
							$errMsg .= "<p>Card number does not match Card type.</p>";
							$card_number_err .= "<p class=\"fix_msg\">Card number does not match Card type</p>";
						}
						
						if (!preg_match("/^[0-9]{3}$/",$security_code)) {
							$errMsg .= "<p>Invalid security code.</p>";
							$security_code_err .= "<p class=\"fix_msg\">Invalid security code</p>";
						}
						break;
					case "American Express":
						if (!preg_match("/^34[0-9]{13}$/",$card_number)) {
							$errMsg .= "<p>Card number does not match Card type.</p>";
							$card_number_err .= "<p class=\"fix_msg\">Card number does not match Card type</p>";
						}
						
						if (!preg_match("/^[0-9]{4}$/",$security_code)) {
							$errMsg .= "<p>Invalid security code.</p>";
							$security_code_err .= "<p class=\"fix_msg\">Invalid security code</p>";
						}
						break;
				}
			} else {
				header("location: payment.php");
			}
			
			/*Expiry month and year validation*/
			if (isset($_POST["expiry"])) {
				$expiry = $_POST["expiry"];
				$expiry = sanitise_input($expiry);
				
				$expiry_err = "";
				
				if ($expiry == "") {
					$expiry_err .= "<p class=\"fix_msg\">Please enter expiry month</p>";
				} else {
					if (!preg_match("/[0-9]{2}-[0-9]{2}/",$expiry)) {
						$errMsg .= "<p>Invalid expiry month format (mm-yy)</p>";
						$expiry_err .= "<p class=\"fix_msg\">Invalid expiry month format (mm-yy)</p>";
					} else {
						$mm = array("01","02","03","04","05","06","07","08","09","10","11","12");
						$expiryMonth = substr($expiry,0,2);
						$expiryYear = intval("20" . substr ($expiry,3,2));
						
						$test = false;
						for ($i=0;$i<count($mm);$i++) {
							if ($expiryMonth==$mm[$i]) {
								$test = true;
								break;
							}
						}
						if ($test==false) {
							$errMsg .= "<p>Invalid expiry month.</p>";
							$expiry_err .= "<p class=\"fix_msg\">Invalid expiry month</p>";
						}
						
						$current_year = date(Y);
						$current_month = date(m);
						
						if ($expiryYear < $current_year) {
							$errMsg .= "<p>Invalid expiry year.</p>";
							$expiry_err .= "<p class=\"fix_msg\">Invalid expiry year</p>";
						} else if ($expiryYear == $current_year) {
							if ($expiryMonth <= $current_month) {
								$errMsg .= "<p>Invalid expiry month</p>";
								$expiry_err .= "<p class=\"fix_msg\">Invalid expiry month</p>";
							}
						}
					}
				}
			} else {
				header ("location: payment.php");
			}
				
			if ($errMsg != "") {
				echo $errMsg;
				//if errMsg is not empty, then pass back data to fix_order.php
				$que_str= "firstname={$firstname}&lastname={$lastname}&email={$email}&street={$street}&suburb={$suburb}&state={$state}&postcode={$postcode}
							&phone_number={$phone_number}&preferred_contact={$pref_contact}&movie={$movie}&date={$date}&session={$session}&adult_ticket={$adult_ticket}&student_ticket={$student_ticket}&child_ticket={$child_ticket}&senior_ticket={$senior_ticket}&total_money={$total_money}
							&firstname_err={$firstname_err}&lastname_err={$lastname_err}&email_err={$email_err}&street_err={$street_err}&suburb_err={$suburb_err}
							&state_err={$state_err}&postcode_err={$postcode_err}&phone_number_err={$phone_number_err}&preferred_contact_err={$pref_contact_err}
							&movie_err={$movie_err}&date_err={$date_err}&session_err={$session_err}&adult_ticket_err={$adult_ticket_err}&student_ticket_err={$student_ticket_err}
							&child_ticket_err={$child_ticket_err}&senior_ticket_err={$senior_ticket_err}&total_money_err={$total_money_err}&credit_type_err={$credit_type_err}
							&name_on_card_err={$name_on_card_err}&card_number_err={$card_number_err}&security_code_err={$security_code_err}&expiry_err={$expiry_err}&errMsg={$errMsg}";
				header("location: fix_order.php?$que_str");
			} else {
				//Transform today, tomorrow, after_tomorrow into real date form
				if ($date == "today") {
					$date = date("Y/m/d",strtotime("today"));
				}				
				
				if ($date == "tomorrow") {
					$date = date("Y/m/d",strtotime("today + 1day"));
				}
				
				if ($date == "after_tomorrow") {
					$date = date("Y/m/d",strtotime("today + 2days"));
				}
				
				$order_time = date('Y/m/d H:i:s');
				$order_status = "pending";
				require_once("settings.php");
				
				$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
				
				if (!$conn) {
					echo "<p>Failed to open database</p>";
				} else {
					$sql_table = "orders";
					
					//create table if it doesn't exist
					$query_create_table = "CREATE TABLE IF NOT EXISTS `$sql_table` (
						`order_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
						`firstname` VARCHAR(25),
						`lastname` VARCHAR(25),
						`email` TEXT,
						`str_addr` TEXT,
						`state` VARCHAR(3),
						`pcode` VARCHAR(4),
						`phone` VARCHAR(10),
						`pref.contact` TEXT,
						`movie` TEXT,
						`date` TEXT,
						`session` TEXT,
						`adult_ticket` INT(11),
						`student_ticket` INT(11),
						`child_ticket` INT(11),
						`senior_ticket` INT(11),
						`order_cost` INT(11),
						`credit_type` TEXT,
						`name_on_card` VARCHAR(40),
						`card_number` TEXT,
						`expiry` VARCHAR(5),
						`CVV` VARCHAR(3),
						`order_time` TEXT,
						`order_status` TEXT
					)";
					
					mysqli_query($conn,$query_create_table);
					
					$query = "INSERT  INTO `$sql_table` (`firstname`, `lastname`, `email`, `str_addr`, `state`, `pcode`, `phone`, `pref.contact`, `movie`, `date`, `session`, `adult_ticket`, `student_ticket`, `child_ticket`, `senior_ticket`, `order_cost`, `credit_type`, `name_on_card`, `card_number`, `expiry`, `CVV`, `order_time`, `order_status`) VALUES ('$firstname','$lastname','$email','$street','$state','$postcode','$phone_number','$pref_contact','$movie','$date','$session','$adult_ticket','$student_ticket','$child_ticket','$senior_ticket','$total_money','$credit_type','$name_on_card','$card_number','$expiry','$security_code','$order_time','$order_status')";
				
					$result = mysqli_query($conn,$query);
					
					if (!$result) {
						echo "<p>There is something wrong with the system, please try later</p>";
					} else {
						/*repplace 12 first numbers of card number with * */
						$card_number_replacement = "************";
						$card_number_patt = "/^[0-9]{12}/";
						$card_number_hidden = preg_replace($card_number_patt,$card_number_replacement,$card_number);
						$que_str_to_receipt= "firstname={$firstname}&lastname={$lastname}&email={$email}&street={$street}&suburb={$suburb}&state={$state}&postcode={$postcode}
												&phone_number={$phone_number}&preferred_contact={$pref_contact}&movie={$movie}&date={$date}&session={$session}&adult_ticket={$adult_ticket}&student_ticket={$student_ticket}&child_ticket={$child_ticket}&senior_ticket={$senior_ticket}&total_money={$total_money}&credit_type={$credit_type}&card_number_hidden={$card_number_hidden}";
						header("location: receipt.php?$que_str_to_receipt");
					}
					
				mysqli_close($conn);
				}
			}
		?>
		
		<?php
			include_once("footer.inc");
		?>
	</body>
</html>