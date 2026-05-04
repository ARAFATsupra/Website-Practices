<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Database Connection Failed: " . $conn->connect_error);
}
?>