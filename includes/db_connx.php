<?php
$servername = "127.0.0.1";
$user = "a_new_user";
$password = "1234";
$db = "e-revive";

// Create connection
$conn = new mysqli($servername, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
else{

echo "Successfully connected to: ". $db;

}


?>

