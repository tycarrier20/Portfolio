<!DOCTYPE HTML>
<html>

<?php
// connect to database
include_once('../ERdbinc.php');
$link = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
if ($link->connect_error) {
	print "There was a problem connecting to the database.<BR />";
	print $link->connect_errno.": {$link->connect_error}";
} else {
	print "Database connection established.";
}

// verify username and password

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$error = '';

if(isset($_POST['submit'])) {
		if($uname == "tc595") {
			if($pass == 'password') {
				//set location of employee page
			}
		}
		else {
			Serror = "Invalid username or password";
		}
}
?>

<link rel="stylesheet" href="Style Eden Login Functionality.css">
<form action="action_page.php">
  <div class="imgcontainer">
    <img height="100" width="86" src="Eden logo.png" alt="Eden Bistro" class="img">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</html>