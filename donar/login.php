<?php 
require("./layout/db.php");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM donar WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        session_start();
        $_SESSION["donarid"]=$row["id"];
        $_SESSION["donarname"]=$row["name"];
        header("Location:/donar/home.php");
        die();
    }
}else{
    header("Location:/donar?err=Email or Password is Wrong!");
    die();
}
?>