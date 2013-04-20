<?php

// set database server access variables:
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_1";

$con=mysqli_connect($host,$user,$pass,$db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO contacts (id, name, surname, number, email, message)
VALUES
(NULL,'$_POST[name]','$_POST[surname]','$_POST[number]','$_POST[email]','$_POST[message]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "1 record added";

mysqli_close($con);
?> 