<?php 
require("../layout/db.php");

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];

$sql = "INSERT INTO vol(name,mobile,email,hour) VALUES('$name','$mobile','$email','0');";


try {
    $conn->query($sql);
    header("Location:/staff/vol.php?msg=Volunteer Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/staff/vol.php?err=Something Went Wrong!");
    die();
}

?>