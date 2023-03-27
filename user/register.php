<?php 
require("./layout/db.php");

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO user(name,mobile,email,password) VALUES('$name','$mobile','$email','$password');";


try {
    $conn->query($sql);
    header("Location:/user?msg=Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/user?err=Something Went Wrong!");
    die();
}

?>