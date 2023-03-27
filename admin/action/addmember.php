<?php 
require("../layout/db.php");

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$nationalid = $_POST["nationalid"];

$sql = "INSERT INTO member(name,mobile,nationalid,password) VALUES('$name','$mobile','$nationalid','$mobile');";


try {
    $conn->query($sql);
    header("Location:/admin/members.php?msg=Member Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/admin/members.php?err=Something Went Wrong!");
    die();
}

?>