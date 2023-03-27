<?php 
require("../layout/db.php");
session_start();

$amount = $_POST["amount"];
$reason = $_POST["reason"];
$userid=$_SESSION["userid"];

$sql = "INSERT INTO user_req(reason,status,com,amount,userid) VALUES('$reason','Pending','Waiting List','$amount','$userid');";

try {
    $conn->query($sql);
    header("Location:/user/home.php?msg=Donated Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/user/homr.php?err=Something Went Wrong!");
    die();
}

?>