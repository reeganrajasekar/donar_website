<?php
$servername = "localhost";
$username = "root";
$password = "trysomething";
$db_name = "donar";
$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>