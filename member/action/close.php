<?php
require("../layout/db.php");

$status = $_POST["status"];
$id = $_POST["id"];

$conn->query("UPDATE user_req SET status='$status' WHERE id='$id'");
header("Location:/member/new.php?msg=Updated Successfully!");
die()
?>