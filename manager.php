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
			session_start();
			include_once ("header.inc");
			include_once ("menu.inc");
		?>
		
		<article>
			<h1>Manage page</h1>
			
			<section>
			<form method="post" action="manage.php">
				<label for="manageMenu">Option</label>
				<select id="manageMenu" name="manageMenu">
					<option value="display_all">Display all orders</option>
					<option value="display_orders_by_name">Display orders by customers' names</option>
					<option value="display_orders_by_movie">Display orders by movie</option>
					<option value="display_orders_pending">Display all pending orders</option>
					<option value="display_orders_by_cost">Display orders sorted by total cost</option>
				</select>
				
				<p><input name="apply" type="submit" value="Apply"/>&#160;<input name="logout" type="submit" value="Log out"/></p>
			</form>
			</section>
			
		<?php		
			error_reporting(0);
			
			if ($_POST["logout"] == "Log out") {
				header ("location: logout.php");
			}
		
			if ($_POST["apply"] == "Apply") {
				$menuOption = $_POST["manageMenu"];
				
				switch ($menuOption) {
					case "display_all":
						header ("location: display_all.php");	//call display_all.php to display all orders
						break;
					case "display_orders_by_name":
						header ("location: display_by_name.php");	//call display_by_name.php to display orders accompanied with specific customer name
						break;
					case "display_orders_by_movie":
						header ("location: display_by_movie.php");	//call display_by_movie.php to display orders accompanied with specific movie
						break;
					case "display_orders_pending":
						header ("location: display_pending.php");	//call display_pending to display pending orders 
						break;
					case "display_orders_by_cost":
						header ("location: display_by_cost.php"); //call display_by_cost to display orders sorted by order costs
						break;
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