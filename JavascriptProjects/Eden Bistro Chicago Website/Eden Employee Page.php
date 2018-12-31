<?php session_start();
	 if(!isset($_SESSION['name'])) {
		header("location: Eden Login Functionality.php");
	 } else {
		 
	 

?>
<!DOCTYPE HTML>
<html align="center">
<?php
	// connect to database
include_once('ERdbinc.php');
$link = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
if ($link->connect_error) {
	print "There was a problem connecting to the database.<BR />";
	print $link->connect_errno.": {$link->connect_error}";
}

	// grab database options and put into dropdown
	// food items
$query1 = "SELECT * FROM `DrinkMenu`";
$query2 = "SELECT * FROM `BreakfastMenu`";
$query3 = "SELECT * FROM `LunchMenu`";
$query4 = "SELECT * FROM `SideMenu`";
$query5 = "SELECT * FROM `DinnerMenu`";
$query6 = "SELECT * FROM `SideMenu`";
$result1 = mysqli_query($link, $query1);
$result2 = mysqli_query($link, $query2);
$result3 = mysqli_query($link, $query3);
$result4 = mysqli_query($link, $query4);
$result5 = mysqli_query($link, $query5);
$result6 = mysqli_query($link, $query6);

$options = array();
 while($row1 = mysqli_fetch_array($result1)) { 
 $options[] = $row1[0];
 }
  while($row1 = mysqli_fetch_array($result2)) { 
 $options[] = $row1[0];
 }
  while($row1 = mysqli_fetch_array($result3)) { 
 $options[] = $row1[0];
 }
  while($row1 = mysqli_fetch_array($result4)) { 
 $options[] = $row1[0];
 }
  while($row1 = mysqli_fetch_array($result5)) { 
 $options[] = $row1[0];
 }
  while($row1 = mysqli_fetch_array($result6)) { 
 $options[] = $row1[0];
 }
 
	// event items
$query7 = "SELECT * FROM `EventCalendar`";
$result7 = mysqli_query($link, $query7);

 while($row2 = mysqli_fetch_array($result7)) { 
 $options1[] = $row2[1];
 }
	
	// reservation items
$query8 = "SELECT * FROM `Reservations`";
$result8 = mysqli_query($link, $query8);
 while($row3 = mysqli_fetch_array($result8)) { 
 $options2[] = $row3[1];
 }
$query10 = "SELECT * FROM `Reservations`";
$result10 = mysqli_query($link, $query10);
 while($row4 = mysqli_fetch_array($result10)) { 
 $options5[] = $row4[2];
 }
 
	// add menu item
		// and menu price
			// breakfast
if(isset($_POST['brItem'])) {
	$q1 = "INSERT INTO BreakfastMenu (Breakfast_Item, Price) VALUES ('".$_POST["newItemName"]."','".$_POST["newItemPrice"]."')";
	$result9 = $link->query($q1);
	}
			// lunch
if(isset($_POST['lnItem'])) {
	$q2 = "INSERT INTO LunchMenu (Lunch_Item, Price) VALUES ('".$_POST["newItemName"]."','".$_POST["newItemPrice"]."')";
	$result10 = $link->query($q2);
	}
			// dinner
if(isset($_POST['dnItem'])) {
	$q3 = "INSERT INTO DinnerMenu (Dinner_Item, Price) VALUES ('".$_POST["newItemName"]."','".$_POST["newItemPrice"]."')";
	$result11 = $link->query($q3);
	}
			// drinks
if(isset($_POST['drItem'])) {
	$q4 = "INSERT INTO DrinkMenu (Drink_Item, Price) VALUES ('".$_POST["newItemName"]."','".$_POST["newItemPrice"]."')";
	$result12 = $link->query($q4);
	}
			// sides
if(isset($_POST['sdItem'])) {
	$q7 = "INSERT INTO SideMenu (Side_Item, Price) VALUES ('".$_POST["newItemName"]."','".$_POST["newItemPrice"]."')";
	$result15 = $link->query($q7);
	}
			// extra
if(isset($_POST['exItem'])) {
	$q8 = "INSERT INTO ExtraMenu (Extra_Item, Additional_Price) VALUES ('".$_POST["newItemName"]."','".$_POST["newItemPrice"]."')";
	$result16 = $link->query($q8);
	}			
			
	// update menu item 
		// update menu price
if(isset($_POST['brUpdateItem'])) {
	$q21 = "UPDATE BreakfastMenu SET Breakfast_Item = '".$_POST["newCurrentItemName"]."' WHERE Breakfast_Item = '".$_POST["currentItemName"]."'";
	$q22 = "UPDATE BreakfastMenu SET Price = '".$_POST["newCurrentPrice"]."' WHERE Breakfast_Item = '".$_POST["newCurrentItemName"]."'";	
	$result21 = $link->query($q21);
	$result22 = $link->query($q22);
		}

if(isset($_POST['lnUpdateItem'])) {
	$q23 = "UPDATE LunchMenu SET Lunch_Item = '".$_POST["newCurrentItemName"]."' WHERE Lunch_Item = '".$_POST["currentItemName"]."'";
	$q24 = "UPDATE LunchMenu SET Price = '".$_POST["newCurrentPrice"]."' WHERE Lunch_Item = '".$_POST["newCurrentItemName"]."'";	
	$result23 = $link->query($q23);
	$result24 = $link->query($q24);
		}
		
if(isset($_POST['dnUpdateItem'])) {
	$q25 = "UPDATE DinnerMenu SET Dinner_Item = '".$_POST["newCurrentItemName"]."' WHERE Dinner_Item = '".$_POST["currentItemName"]."'";
	$q26 = "UPDATE DinnerMenu SET Price = '".$_POST["newCurrentPrice"]."' WHERE Dinner_Item = '".$_POST["newCurrentItemName"]."'";	
	$result25 = $link->query($q25);
	$result26 = $link->query($q26);
		}
	
if(isset($_POST['drUpdateItem'])) {
	$q27 = "UPDATE DrinkMenu SET Drink_Item = '".$_POST["newCurrentItemName"]."' WHERE Drink_Item = '".$_POST["currentItemName"]."'";
	$q28 = "UPDATE DrinkMenu SET Price = '".$_POST["newCurrentPrice"]."' WHERE Drink_Item = '".$_POST["newCurrentItemName"]."'";	
	$result27 = $link->query($q27);
	$result28 = $link->query($q28);
		}

if(isset($_POST['exUpdateItem'])) {
	$q31 = "UPDATE ExtraMenu SET Extra_Item = '".$_POST["newCurrentItemName"]."' WHERE Extra_Item = '".$_POST["currentItemName"]."'";
	$q32 = "UPDATE ExtraMenu SET Additional_Price = '".$_POST["newCurrentPrice"]."' WHERE Extra_Item = '".$_POST["newCurrentItemName"]."'";	
	$result31 = $link->query($q31);
	$result32 = $link->query($q32);
		}

if(isset($_POST['sdUpdateItem'])) {
	$q33 = "UPDATE SideMenu SET Side_Item = '".$_POST["newCurrentItemName"]."' WHERE Side_Item = '".$_POST["currentItemName"]."'";
	$q34 = "UPDATE SideMenu SET Price = '".$_POST["newCurrentPrice"]."' WHERE Side_Item = '".$_POST["newCurrentItemName"]."'";	
	$result33 = $link->query($q33);
	$result34 = $link->query($q34);
		}
		
	// remove menu item
if(isset($_POST['brRemItem'])) {
	$q41 = "DELETE FROM BreakfastMenu WHERE Breakfast_Item = '".$_POST["removeItemHere"]."'";
	$result41 = $link->query($q41);
		}
		
	// add event name
		// and event date
		// and event description
if(isset($_POST['eventAdder'])) {
	$q6 = "INSERT INTO EventCalendar (EventDate, EventName, EventDescription) VALUES ('".$_POST["eventDater"]."','".$_POST["eventNamer"]."','".$_POST["eventDescer"]."')";
	$result14 = $link->query($q6);
	}
	// add monthly special
		// and month of new special
		// and description of new special
if(isset($_POST['addMonthSpecial'])) {
	$q20 = "INSERT INTO MonthlySpecials (Month_of_Special, Special_Description) VALUES ('".$_POST["specialMonth"]."','".$_POST["specialDescription"]."')";
	$result20 = $link->query($q20);
		}
 
?>
<head>
<link rel="stylesheet" href="Style Eden Employee Page.css">
</head>
<body>
<form  method="post" action="Eden Employee Page.php">
  <div class="imgcontainer">
    <img height="100" width="86" src="Eden logo.png" alt="Eden Bistro" class="img">
	</br>
  </br>
  </div>
<!-- COMPLETE -->
<h2>Update Menu Item</h2>

<label><b>Current Item Name:</b></label> 
<select name="currentItemName">
<?php foreach ($options as $o) { ?>
<option><?php echo($o); ?></option><?php } ?>

</select></br></br>
<label><b>New Item Name:</b></label> <input name="newCurrentItemName" placeholder="Enter New Item Name"></br></br>
<label><b>New Item Price:</b></label> <input name="newCurrentPrice" placeholder="Enter New Item Price"></br></br>

<button name="brUpdateItem">Update Breakfast Item</button> <button name="lnUpdateItem">Update Lunch Item</button> <button name="dnUpdateItem">Update Dinner Item</button> <button name="drUpdateItem">Update Drink Item</button> <button name="exUpdateItem">Update Extras Item</button> <button name="sdUpateItem">Update Side Item</button></br></br>

<!-- COMPLETE -->
<h2>Add Menu Item</h2>

<label><b>New Item Name:</b></label> <input name="newItemName" placeholder="Add Item Name"></br></br>
<label><b>New Item Price:</b></label> <input name="newItemPrice" placeholder="Add Item Price"></br></br>

<button name="brItem">Add Breakfast Item</button> <button name="lnItem">Add Lunch Item</button> <button name="dnItem">Add Dinner Item</button> <button name="drItem">Add Drink Item</button> <button name="exItem">Add Extras Item</button> <button name="sdItem">Add Side Item</button></br></br>

<!-- COMPLETE -->
<h2>Add Event</h2>

<label><b>New Event Name:</b></label> <input name="eventNamer" placeholder="Add Event Name"></br></br>
<label><b>New Event Date:</b></label> <input name="eventDater" placeholder="Add Event Date"></br>
<p><b>New Event Description:</b></p><textarea name="eventDescer"></textarea></br></br>

<button name="eventAdder">Add New Event</button></br></br>

<!-- COMPLETE -->
<h2>Add New Reservation</h2>

<label><b>Name on Reservation:</b></label> <input name="newResName" placeholder="Add Name"></br></br>
<label><b>Desired Space:</b></label>
<select name="newResSpace">
<?php foreach ($options5 as $w) { ?>
<option><?php echo($w); ?></option><?php } ?>
</select></br></br>
<label><b>Reservation Date:</b></label> <input name="newResDate" placeholder="Add Reservation Date"></br></br>
<label><b>Reservation Time:</b></label> <input name="newResTime" placeholder="Add Reservation Time"></br></br>

<button name="addNewRes">Add New Reservation</button>

<!-- COMPLETE -->
<h2>Add Monthly Special</h2>

<label><b>Month of New Special:</b></label> <input name="specialMonth" placeholder="Add Month"></br>
<p><b>New Monthly Special Description:</b></p> <textarea name="specialDescription"></textarea></br></br>


<button name="addMonthSpecial">Add New Monthly Special</button></br></br>
</form>
</body>
</html>

	 <?php } ?>