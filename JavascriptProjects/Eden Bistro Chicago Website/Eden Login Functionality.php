<?php session_start();?>
<!DOCTYPE HTML>
<html>

<?php
	// connect to database
include_once('ERdbinc.php');
$link = new mysqli($dbhost,$dbuser,$dbpassword,$dbname);
if ($link->connect_error) {
	print "There was a problem connecting to the database.<BR />";
	print $link->connect_errno.": {$link->connect_error}";
}

	// verify username and password and start session to ensure security
$error = "";
$success = "";

if (isset($_POST['uname'])){
		$uname = $_POST['uname'];
}

if (isset($_POST['pass'])){
		$pass = $_POST['pass'];
}
 
if(isset($_POST['submit'])) {
	$q = "SELECT 1 FROM EmployeeCredentials WHERE Username='$uname' AND Password='$pass';";
	$result = $link->query($q);
	if ($result!==false && $result ->  num_rows > 0) {
        $_SESSION['name']=$_POST['uname'];
        // take user to secure page
		header("location: Eden Employee Page.php");
}
			else {
				$error = "Invalid Username or Password";
				$success = "";
			}	
	}



?>
<body>
<link rel="stylesheet" href="Style Eden Login Functionality.css">
<form  method="post" action="Eden Login Functionality.php">
  <div class="imgcontainer">
    <img height="100" width="86" src="Eden logo.png" alt="Eden Bistro" class="img">
  </div>

  <div align="center" class="container">
    <p for="uname"><b>Username: </p></b>
    <input type="text" placeholder="Enter Username" name="uname" value="" required></br>

    <p for="pass"><b>Password: </p></b>
    <input type="password" placeholder="Enter Password" name="pass" value="" required>
	
	<p class="error"><?php echo $error; ?></p><p class="success"><?php echo $success; ?></p>
    <button name="submit" type="submit">Login</button>

</form>
</body>
</html>