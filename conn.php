<?php
// database-configuration
$servername = "localhost";
$username = "clientsi_illustrake";
$password = "uj4w&f$(*-]n";
$database = "clientsi_drupal";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfullyyyyy";
?>