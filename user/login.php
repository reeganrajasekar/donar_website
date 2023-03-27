<?php 
require("./layout/db.php");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        session_start();
        $_SESSION["userid"]=$row["id"];
        $_SESSION["username"]=$row["name"];
        header("Location:/user/home.php");
        die();
    }
}else{
    header("Location:/user?err=Email or Password is Wrong!");
    die();
}
?>