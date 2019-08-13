<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="movie tickets purchase" />
		<meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
		<meta name="author" content="Ngoc Thang Nguyen" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="styles/style.css"/>
		<title>Login page</title>
	</head>
	
	<body>
		<?php
			session_start();
			include_once ("header.inc");
			include_once ("menu.inc");
		?>
		
		<article>
			<h1>Login</h1>
			<form method="post" action="login.php" class="manage_form">
				<label for="manage_login_username"><strong>Username:</strong> </label>
				<p><input id="manage_login_username" type="text" name="username"/></p>
				<label for="manage_login_password"><strong>Password:</strong> </label>
				<p><input id="manage_login_password" type="password" name="password"/></p>
				
				<p><input name="login" type="submit" value="Login"/>&#160;<input name="back" type="submit" value="Back"/></p>
			</form>
		
		<?php
			error_reporting(0);
			
			if ($_POST["back"] == "Back") {
				header ("location: index.php");
			}
			
			if ($_SESSION["username"] == "") {
				
				$username = $_POST["username"];
				$password = $_POST["password"];
				
				require_once ("settings.php");
				$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
				
				if (!$conn) {
					echo "<p>There is a problem with the system, please try again later</p>";
				} else {
					session_start();
					$sql_table = "managers";
					//check if username and pwd are correct
					$query = "SELECT * FROM `$sql_table` WHERE `username` = '$username' AND `password` = '$password' AND `login_status` = 'out'";
					
					$result = mysqli_query($conn,$query);
					
					if (!$result) {
						echo "<p>Login failed</p>";
					} else {
						while ($row = mysqli_fetch_assoc($result)) {
							if ($username == $row["username"] && $password == $row["password"]) {
								//start session to determine when a manager logins and logouts 
								session_start();
								$_SESSION["username"] = "$username";
								$_SESSION["password"] = "$password";
								
								//change the loging status to in
								$query2 = "UPDATE `$sql_table` SET `login_status`='in' WHERE `username` = '$username' AND `password` = '$password'";
								$result2 = mysqli_query($conn,$query2);
								
								if (!$result2) {
									echo "<p>Login failed</p>";
								} else {
									header ("location: manager.php");
								}
								
								mysqli_free_result($result);
							}
						}
					}
					
					mysqli_close($conn);
				}
		} else {
			header ("location: manager.php");
		}
		?>
		</article>
		
		<section class="bottom_footer">
			<?php
				include("footer.inc");
			?>
		</section>
	</body>
</html>
