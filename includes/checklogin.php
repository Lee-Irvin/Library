<?php
	// checkLogin.php
	session_start(); // Start a new session
	include 'includes/conn.php'; // Holds all of our database connection information

	// Get the data passed from the form
	$username = $_POST['name'];
	$password = $_POST['password'];
	 
	// Do some basic sanitizing
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	 
	$sql = "select * from admin where username = '$username' and password = '$password'";
	$result = mysql_query($sql) or die ( mysql_error() );
	 
	$count = mysql_num_rows($result);	 
	if ($count == 1) {
	     $_SESSION['loggedIn'] = "true";
	     header("Location: library/loginsuccess.php"); // This is wherever you want to redirect the user to
	} else {
	     $_SESSION['loggedIn'] = "false";
	     header("Location: library/loginfailed.php"); // Wherever you want the user to go when they fail the login
	}
?>