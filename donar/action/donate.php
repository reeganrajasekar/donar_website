<?php 
require("../layout/db.php");
session_start();

$amount = $_POST["amount"];
$donarid=$_SESSION["donarid"];

$sql = "INSERT INTO donation(amount,donarid) VALUES('$amount','$donarid');";

try {
    $conn->query($sql);
    header("Location:/donar/home.php?msg=Donated Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/donar/homr.php?err=Something Went Wrong!");
    die();
}

?>