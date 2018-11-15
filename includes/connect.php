<?php
$con = mysqli_connect("localhost", "username","password","db_name");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// this stops SQL injections in all $_POST data transfer

foreach($_POST as $key =>$value){
	$_POST[$key] = trim(mysqli_real_escape_string($con,$value));
	
}
// this stops SQL injections in all $_GET data transfer
foreach($_GET as $key =>$value){
	$_GET[$key] = trim(mysqli_real_escape_string($con,$value));
	
}
?>