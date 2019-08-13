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
		
		<h1>RECEIPT</h1>
		
		<dl>
			<dt>Name</dt>
			<dd><?php echo ($_GET["firstname"] . " " . $_GET["lastname"]) ?></dd>
			
			<dt>Email</dt>
			<dd><?php echo $_GET["email"] ?></dd>
			
			<dt>Phone number</dt>
			<dd><?php echo $_GET["phone_number"] ?></dd>
			
			<dt>Address</dt>
			<dd><?php echo ($_GET["street"] . ", " . $_GET["suburb"] . ", " . $_GET["state"] . " " . $_GET["postcode"])?></dd>
			
			<dt>Movie</dt>
			<dd><?php echo $_GET["movie"] ?></dd>
			
			<dt>Date</dt>
			<dd><?php echo $_GET["date"] ?></dd>
			
			<dt>Session</dt>
			<dd><?php echo $_GET["session"] ?></dd>
			
			<?php
				$adult_ticket = $_GET["adult_ticket"];
				if ($adult_ticket != "") {
					echo "<dt>Number of adult ticket(s)</dt>\n";
					echo "<dd>$adult_ticket</dd>\n";
				}
			?>
			
			<?php
				$student_ticket = $_GET["student_ticket"];
				if ($student_ticket != "") {
					echo "<dt>Number of student ticket(s)</dt>\n";
					echo "<dd>$student_ticket</dd>\n";
				}
			?>
			
			<?php
				$child_ticket = $_GET["child_ticket"];
				if ($child_ticket != "") {
					echo "<dt>Number of child ticket(s)</dt>\n";
					echo "<dd>$child_ticket</dd>\n";
				}
			?>
			
			<?php
				$senior_ticket = $_GET["senior_ticket"];
				if ($senior_ticket != "") {
					echo "<dt>Number of senior ticket(s)</dt>\n";
					echo "<dd>$senior_ticket</dd>\n";
				}
			?>
			
			<dt>Total amount</dt>
			<dd><?php echo "$" . $_GET["total_money"] ?></dd>
			
			<dt>Credit card</dt>
			<dd><?php echo strtoupper($_GET["credit_type"]) . " " . $_GET["card_number_hidden"] ?></dd>
		</dl>
		
		<?php
			include_once("footer.inc");
		?>
	</body>
</html>