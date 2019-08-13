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
			<p>Update status of order <?php echo $_GET["order_id"] ?></p>
			<form method="post" action = "update.php?<?php echo "order_id=".$_GET["order_id"] ?>">
				<select id="update_status" name="update_status">
					<option value="none">Please choose...</option>
					<option value="pending">Pending</option>
					<option value="fulfilled">Fulfilled</option>
					<option value="paid">Paid</option>
					<option value="archived">Archived</option>
				</select>
				<p><input name ="confirm" type="submit" value="Confirm"/>&#160;<input name="back" type="submit" value="Back"/></p>
			</form>
		
		<?php
			error_reporting(0);

			if ($_POST["back"] == "Back") {
				header("location: manager.php");
			}
			$sql_table = "orders";
			
			$order_id = $_GET["order_id"];
			
			$update_status = $_POST["update_status"];
					
			if ($_POST["confirm"] == "Confirm") {		
				include("settings.php");
				
				$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
				
				$query = "UPDATE `$sql_table` SET `order_status` = '$update_status' WHERE `order_id`='$order_id'";
				
				$result = mysqli_query($conn, $query);
				
				if (!$conn) {
					echo "<p>There is a problem with  please try again later</p>";
				} else {
					if (!$result) {
						echo "<p>There is a problem with the system, please try again later</p>";
					} else {
						echo "<p>Successfully updated!</p>";
					mysqli_free_result($result);
					}
				}
				mysqli_close($conn);			
			}
		?>
		</article>
		
		<section class="bottom_footer">
			<?php
				include("footer.inc");
			?>
		</section>	</body>
	
</html>