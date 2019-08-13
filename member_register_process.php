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
			
			//randomly generate a member id
			function generate_id() {
				$rand = mt_rand(10000000,99999999);
				
				$member_id = "1212".strval($rand);
				
				return $member_id;
			}
		?>
		
		
		<?php
			//this function will check if there is a similar member id existing in the table
			function check_member_id ($member_id) {
				$check_member_id = true;
				
				require_once("settings.php");
				$conn = @mysqli_connect($host, $user, $pwd, $sql_db);
				
				if (!$conn) {
					echo "<p>There is a problem with the system, please try again later</p>";
				} else {
					$sql_table = "members";
					
					$query = "SELECT `member_id` FROM `$sql_table`";
					
					$result = mysqli_query($conn,$query);
					
					if (!$result) {
						echo "<p>There is a problem with the system, please try again later</p>";
					} else {
						while ($row = mysqli_fetch_assoc($result)) {
							if ($row["member_id"] == $member_id) {
								$check_member_id = false;
								break;
							} else {
								$check_member_id = true;
							}
						}
					mysqli_free_result($result);
					}
				mysqli_close($conn);
				}
				
				return $check_member_id;
			}
			
			
			//validate state and postcode, other elements are validated in HTML
			function validate($state,$postcode) {
				$errMsg = "";
								
				if ($state == "none"){
					$errMsg .= "<p>Please choose your state</p>";
				} else {			
					switch ($state) {
						case "none":
						  $errMsg .= "<p>Please choose your state.</p>";
						  break;
						case "VIC":
						  if (!preg_match("/^3[0-9]{3}$/", $postcode) && !preg_match("/^8[0-9]{3}$/", $postcode)) {
							$errMsg .= "<p>Postcode does not match.</p>";
						  }
						  break;
						case "NSW":
						  if (!preg_match("/^1[0-9]{3}$/", $postcode) && !preg_match("/^2[0-9]{3}$/", $postcode)) {
							$errMsg .= "<p>Postcode does not match.</p>";
						  }
						  break;
						case "QLD":
						  if (!preg_match("/^4[0-9]{3}$/", $postcode) && !preg_match("/^9[0-9]{3}$/", $postcode)) {
							$errMsg .= "<p>Postcode does not match.</p>";
						  }
						  break;
						case "NT":
						  if (!preg_match("/^0[0-9]{3}$/", $postcode)) {
							$errMsg .= "<p>Postcode does not match.</p>";
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
						  }
						  break;
						case "ACT":
						  if (preg_match("/^0[0-9]{3}$/", $postcode)) {
							$errMsg .= "<p>Postcode does not match.</p>";
						  }
						  break;
					}	
				}
				
				return $errMsg;
			}
			
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$birthday = $_POST["birthday"];
			$gender = $_POST["gender"];
			$email = $_POST["email"];
			$phone_number = $_POST["phone_number"];
			$street = $_POST["street"];
			$suburb = $_POST["suburb/town"];
			$state = $_POST["state"];
			$postcode = $_POST["postcode"];
			$address = $street. ", " . $suburb . ", " . $state . " " . $postcode;		
			$member_id = generate_id();
			
			$check_member_id = check_member_id($member_id);
			
			$errMsg = validate($state,$postcode);
			
			
			if ($errMsg == "") {
				
				while (!$check_member_id) {
					$member_id = generate_id();
					$check_member_id = check($member_id);
				}
				
				if ($check_member_id == true) {
					
					require_once("settings.php");
					$conn2 = mysqli_connect("feenix-mariadb.swin.edu.au", "s102006301", "020468", "s102006301_db");
					
					if (!$conn2) {
						echo "<p>There is a problem with the system, please try again later</p>";
					} else {
						$sql_table = "members";
						
						$query2 = "INSERT INTO `$sql_table` (`member_id`, `firstname`, `lastname`, `birthday`, `gender`, `email`, `phone_number`, `post_addr`) VALUES ('$member_id','$firstname','$lastname','$birthday','$gender','$email','$phone_number','$address')";
						
						$result2 = mysqli_query($conn2,$query2);
						
						if (!$result2) {
							echo "<p>There is a problem with the system, please try again later</p>";
						} else {
							//automatically send email by calling send_email.php
							$email_content = "Dear <strong>$firstname $lastname</strong>, <br />
											  We are very happy to have you register to our service. Below are your member details: <br />
											  Member ID: $member_id <br />
											  Name: $firstname $lastname <br />
											  Birthday: $birthday <br />
											  Gender: $gender <br />
											  Email: $email <br />
											  Phone number: $phone_number <br />
											  Address: $address <br />";
							header ("location: send_email.php?errMsg={$errMsg}%check={$check_email}&email={$email}&email_content={$email_content}");
						}
					}
				}
			} else {
				header("location: member_register.php?errMsg={$errMsg}&firstname={$firstname}&lastname={$lastname}&gender={$gender}&birthday={$birthday}&email={$email}&street={$street}&suburb={$suburb}&state={$state}&postcode={$postcode}&phone_number={$phone_number}");
			}
		?>