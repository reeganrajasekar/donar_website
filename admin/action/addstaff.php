<?php 
require("../layout/db.php");

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$nationalid = $_POST["nationalid"];

$sql = "INSERT INTO staff(name,mobile,nationalid,password) VALUES('$name','$mobile','$nationalid','$mobile');";


try {
    $conn->query($sql);
    header("Location:/admin/staff.php?msg=Staff Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/admin/staff.php?err=Something Went Wrong!");
    die();
}

?>