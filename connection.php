<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$servername = "localhost";
$username = "root";
$password = "password50";
$conn = new mysqli($servername, $username, $password, "data");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>