<?php
include_once('ERdbinc.php');
$link = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
if ($link->connect_error) {
	print"There was a problem connecting to the database.</BR>";
print $link->connect_errno.": {$link->connect_error}";
}
else {
	// may take out later after testing connection
	print"Database connection established.";
?>
<!DOCTYPE>
	<HTML>
		<HEAD>
			<TITLE>Edens Bistro</TITLE>
			<META Charset "UTF-8" />
			<META name="author" content="Jonathan T. Risoldi" />
			<SCRIPT type="text/javascript" src="topnav.js">
			</SCRIPT>
			<link rel="stylesheet" href="menu.css">
			<link rel="stylesheet" href="topnav.css">			
		</HEAD>
		
		<BODY class="backgroundimage">
			<DIV class="sidenav";>
				<img href="/index.html"><img src="Eden logo.png" alt="logo" /></img> 
				<A href="https://www.google.com/maps/place/2321+E+71st+St,+Chicago,+IL+60649/@41.7660398,-87.5703005,17z/data=!3m1!4b1!4m5!3m4!1s0x880e284fea839a01:0x359acbdb9b3fe3c0!8m2!3d41.7660358!4d-87.5681118">2321 E 71st Street, Chicago, IL 60649</A> 
				<H1>Hours:</H1>
				<H1>Monday-Saturday</H1>
				<H1>9AM-9PM</H1>
				<H1>Sunday</H1>
				<H1>Closed</H1>
				<BR />
				<H1>Breakfast: 9AM-11AM</H1>
				<H1>Lunch: 11AM-3PM</H1>
				<H1>Dinner: 3PM-9PM</H1>
			</DIV>
			<?php include('topnav.php');?>
			<DIV class="Menus">
				<TABLE class="Breakfast">
					<TR>
						<TH>Breakfast</TH>
						<TH>Price</TH>
					</TR>
					<?php
						$q = "SELECT * FROM BreakfastMenu";
						$result = $link->query($q);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						echo "<TR><TD>" . $row["Breakfast_Item"]. "</TD><TD>" . $row["Price"]."</TD></TR>";
						}
					} else {
						echo "0 results";
					}
					}
					?>
				</TABLE>
				<TABLE class="lunch">
					<TR>
						<TH>Lunch</TH>
						<TH>Price</TH>
					</TR>
					<?php
						$q = "SELECT * FROM LunchMenu";
						$result = $link->query($q);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						echo "<TR><TD>" . $row["Lunch_Item"]. "</TD><TD>" . $row["Price"]."</TD></TR>";
						}
					} else {
						echo "0 results";
					}
					?>
				</TABLE>
				<TABLE class="Dinner">
					<TR>
						<TH>Dinner</TH>
						<TH> Price</TH>
					</TR>
										<?php
						$q = "SELECT * FROM DinnerMenu";
						$result = $link->query($q);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						echo "<TR><TD>" . $row["Dinner_Item"]. "</TD><TD>" . $row["Price"]."</TD></TR>";
						}
					} else {
						echo "0 results";
					}
					?>
				</TABLE>
				<TABLE class="Sides">
					<TR>
						<TH>Sides</TH>
						<TH> Price</TH>
					</TR>
										<?php
						$q = "SELECT * FROM SideMenu";
						$result = $link->query($q);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						echo "<TR><TD>" . $row["Side_Item"]. "</TD><TD>" . $row["Price"]."</TD></TR>";
						}
					} else {
						echo "0 results";
					}
					?>
				</TABLE>
				<TABLE class="Drinks">
					<TR>
						<TH>Drinks</TH>
						<TH> Price</TH>
					</TR>
										<?php
						$q = "SELECT * FROM DrinkMenu";
						$result = $link->query($q);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						echo "<TR><TD>" . $row["Drink_Item"]. "</TD><TD>" . $row["Price"]."</TD></TR>";
						}
					} else {
						echo "0 results";
					}
					?>
				</TABLE>
				<TABLE class="extras">
					<TR>
						<TH>Extra Item</TH>
						<TH>Price</TH>
					</TR>					
					<?php
						$q = "SELECT * FROM ExtraMenu";
						$result = $link->query($q);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<TR><TD>" . $row["Extra_Item"]. "</TD><TD>" . $row["Additional_Price"]."</TD></TR>";
							}
						} else {
							echo "0 results";
						}//End of else
							//Make sure to close link at the end of the HTML
					?>
				</TABLE>
			</DIV>
		</BODY>
	</HTML>
</!DOCTYPE>
<?php
	$link->close();
?>