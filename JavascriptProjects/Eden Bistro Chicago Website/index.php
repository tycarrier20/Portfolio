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
			<SCRIPT src="topnav.js" type="text/javascript">
			</SCRIPT>
			<link src="EdenSearchFunctionality.html">
			<link href="https://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet">
			<link rel="stylesheet" href="Eden.css">
			<link rel="stylesheet" href="topnav.css">
		</HEAD>
		<BODY class="backgroundimage">
			<DIV class="sidenav";>
				<img href="/index.html"><img src="Eden logo.png" alt="logo" /></img> 
				<A href="https://www.google.com/maps/place/2321+E+71st+St,+Chicago,+IL+60649/@41.7660398,-87.5703005,17z/data=!3m1!4b1!4m5!3m4!1s0x880e284fea839a01:0x359acbdb9b3fe3c0!8m2!3d41.7660358!4d-87.5681118">2321 E 71st Street, Chicago, IL 60649</A> 
				<br />
				<A>Hours:</A>
				<A>Monday-Saturday</A>
				<A>9AM-9PM</A>
				<A>Sunday</A>
				<A>Closed</A>
				<BR/>
				<TABLE class="sidenavSpecials">
					<TR>
						<TD>Speicals of the Month:<TD>
					</TR>
					
					<?php
						$q = "SELECT * FROM MonthlySpecials";
						$result = $link->query($q);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<TR><TD>" . $row["Special_Description"]."</TD></TR>";
							}
						} else {
							echo "0 results";
						}
						}
						//Make sure to close link at the end of the HTML
					?>
				</TABLE>
			</DIV>
			<?php include('topnav.php');?>
			<DIV class ="homeHeader">
				<H2>EDEN'S BISTRO</H2>
				<H3>Insert Slogan Here</H3>
			</DIV>
		</BODY>
	</HTML>
</!DOCTYPE>
<?php
	$link->close();
?>