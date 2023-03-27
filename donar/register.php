<?php 
require("./layout/db.php");

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO donar(name,mobile,email,password) VALUES('$name','$mobile','$email','$password');";


try {
    $conn->query($sql);
    header("Location:/donar?msg=Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/donar?err=Something Went Wrong!");
    die();
}

?>