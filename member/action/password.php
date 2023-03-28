<?php
require("../layout/db.php");
session_start();
$old=$_POST["old"];
$new=$_POST["new"];
$memberid = $_SESSION["memberid"];

$result = $conn->query("SELECT password FROM member WHERE id='$memberid'");
while ($row = $result->fetch_assoc()) {
    if($row["password"]==$old){
        $conn->query("UPDATE member SET password='$new' WHERE id='$memberid'");
        header("Location:/member?msg=Password Changed Successfully!");
        die();
    }
    else{
        header("Location:/member/password.php?err=Old Password is Wrong!");
        die();
    }
}

?>