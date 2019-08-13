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
			<h1>Display orders by movie</h1>
			<form method="post" action = "display_by_movie.php">
				<label for="choose_movie">Choose movie: </label>
				<select id="choose_movie" name="choose_movie">
				  <option value="none">Please choose...</option>
				  <option value="Co Ba Sai Gon">Co Ba Sai Gon</option>
				  <option value="The Girl from yesterday - Co gai den tu hom qua">The Girl from yesterday - Co gai den tu hom qua</option>
				  <option value="Jailbat - Em chua 18">Jailbat - Em chua 18</option>
				  <option value="Tam Cam: The untold story - Tam Cam: Chuyen chua ke">Tam Cam: The untold story - Tam Cam: Chuyen chua ke</option>
				  <option value="Teo Em">Teo Em</option>
				  <option value="Yellow flowers on the green grass - Toi thay hoa vang tren co xanh">Yellow flowers on the green grass - Toi thay hoa vang tren co xanh</option>
				</select>
				
				<p><input name="apply" type="submit" value="Apply"/>&#160;<input name="back" type="submit" value="Back"/></p>
			</form>
		
		
		<?php		
			error_reporting(0);

			if ($_POST["back"] == "Back") {
				header("location: manager.php");
			}

			$movie = $_POST["choose_movie"];
			
			include("settings.php");
			
			$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
			
			$sql_table = "orders";
						
			$query = "SELECT `order_id`, `order_time`, `firstname`, `lastname`, `movie`, `date`, `session`, `adult_ticket`, `student_ticket`, `child_ticket`, `senior_ticket`, `order_cost`, `order_status` FROM `$sql_table`  WHERE `movie` LIKE '$movie%'";
						
			$result = mysqli_query($conn, $query);
			
			if (!$conn) {
				echo "<p>There is a problem with the system, please try again later</p>";
			} else {
				if (!$result) {
					echo "<p>There is a problem with the system, please try again later</p>";
				} else {
					if ($_POST["apply"] == "Apply") {
						echo "<table border=\"1\">\n";
						echo "<tr>\n "
							."<th scope='col'>Order ID</th>\n "
							."<th scope='col'>Order date</th>\n "
							."<th scope='col'>Movie</th>\n "
							."<th scope='col'>Date</th>\n "
							."<th scope='col'>Session</th>\n "
							."<th scope='col'>Tickets</th>\n "
							."<th scope='col'>Order cost</th>\n "
							."<th scope='col'>Name</th>\n "
							."<th scope='col'>Order status</th>\n "
							."<th scope='col'></th>\n "
							."<th scope='col'></th>\n "
							."</tr>\n ";
									
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<tr>\n ";
							echo "<td>",$row["order_id"],"</td>\n ";
							echo "<td>",$row["order_time"],"</td>\n ";
							echo "<td>",$row["movie"],"</td>\n ";
							echo "<td>",$row["date"],"</td>\n ";
							echo "<td>",$row["session"],"</td>\n ";
							echo "<td>","Adult: " . $row["adult_ticket"] . "<br />"
										."Student: " . $row["student_ticket"] . "<br />"
										."Child: " . $row["child_ticket"] . "<br />"
										."Senior: " . $row["senior_ticket"] . "<br />"
							,"</td>\n ";
							echo "<td>","$" . $row["order_cost"],"</td>\n ";
							echo "<td>",$row["firstname"] . " " . $row["lastname"],"</td>\n ";
							echo "<td>",$row["order_status"],"</td>\n ";
							echo "<td><a href=\"update.php?order_id={$row["order_id"]}\">Update</a></td>\n";
							echo "<td><a href=\"delete.php?order_id={$row["order_id"]}\">Delete</a></td>\n";
							echo "</tr>\n ";
						}
						echo "</table>\n";
					}
					mysqli_free_result($result);
				}
			mysqli_close($conn);
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