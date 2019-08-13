<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="movie tickets purchase" />
		<meta name="keywords" content="movie, ticket, tickets, purchase, buy" />
		<meta name="author" content="Ngoc Thang Nguyen" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="styles/style.css"/>
		<title>Manage page</title>
	</head>
	
	<body>
		<?php
			include_once ("header.inc");
			include_once ("menu.inc");
		?>
		
		<article>
			<form method="post" action = "delete.php?<?php echo "order_id=".$_GET["order_id"]?>">
				<p>DO YOU WANT TO CONTINUE DELETING ORDER <?php echo $_GET["order_id"]?>?</p>
				<p><input name="confirm" type="submit" value="Confirm"/>&#160;<input name="back" type="submit" value="Back"/></p>
			</form>
		
		<?php
			error_reporting(0);

			if ($_POST["back"] == "Back") {
				header("location: manager.php");
			}
			
			if ($_POST["confirm"] == "Confirm") {
				$order_id = $_GET["order_id"];
				
				include("settings.php");
				
				$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
				
				$sql_table = "orders";
				
				//choose pending order with specific order id which is passed via URL
				$query = "DELETE FROM `$sql_table` WHERE `order_id`='$order_id' AND `order_status`='pending'";
				
				$result = mysqli_query($conn, $query);
				
				if (!$conn) {
					echo "<p>There is a problem with the system, please try again later</p>";
				} else {
					if (!$result) {
						echo "<p>Cannot delete chosen order</p>";
					} else {
						echo "<p>Successfully deleted!</p>";
					}
				}
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