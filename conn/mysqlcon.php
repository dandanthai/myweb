<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BasicWeb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

?>