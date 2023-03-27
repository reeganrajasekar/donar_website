<?php
require("../layout/db.php");

$com = $_POST["com"];
$id = $_POST["id"];

$conn->query("UPDATE user_req SET com='$com' WHERE id='$id'");
header("Location:/member/new.php?msg=Updated Successfully!");
die()
?>