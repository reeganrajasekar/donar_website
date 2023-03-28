<?php
require("../layout/db.php");
session_start();
$old=$_POST["old"];
$new=$_POST["new"];
$staffid = $_SESSION["staffid"];

$result = $conn->query("SELECT password FROM staff WHERE id='$staffid'");
while ($row = $result->fetch_assoc()) {
    if($row["password"]==$old){
        $conn->query("UPDATE staff SET password='$new' WHERE id='$staffid'");
        header("Location:/staff?msg=Password Changed Successfully!");
        die();
    }
    else{
        header("Location:/staff/password.php?err=Old Password is Wrong!");
        die();
    }
}

?>