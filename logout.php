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
		
		<?php
			error_reporting(0);
			$password = $_POST["password"];
			
			require_once ("settings.php");
			$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
			
			if (!$conn) {
				echo "<p>There is a problem with the system, please try again later</p>";
			} else {
				$username = $_SESSION["username"];
				$password = $_SESSION["password"];
				$sql_table = "managers";
				//put the login status back to 'out'
				$query = "UPDATE `$sql_table` SET `login_status`='out' WHERE `username` = '$username' AND `password` = '$password' AND `login_status`='in'";
				
				$result = mysqli_query($conn,$query);
				
				if (!$result) {
					echo "<p>Logout failed</p>";
				} else {
					//close session
					session_unset();
					session_destroy();
					
					header ("location: login.php");
				}
				
				mysqli_close($conn);
			}
		?>
		
		<section class="bottom_footer">
			<?php
				include("footer.inc");
			?>
		</section>
	</body>
</html>
