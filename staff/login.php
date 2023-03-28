<?php 
require("./layout/db.php");

$nationalid = $_POST["nationalid"];
$password = $_POST["password"];

$sql = "SELECT * FROM staff WHERE nationalid='$nationalid' AND password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        session_start();
        $_SESSION["staffid"]=$row["id"];
        $_SESSION["staffname"]=$row["name"];
        header("Location:/staff/home.php");
        die();
    }
}else{
    header("Location:/staff?err=Id or Password is Wrong!");
    die();
}
?>