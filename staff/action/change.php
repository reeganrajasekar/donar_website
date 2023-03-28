<?php
require("../layout/db.php");

$hour = $_POST["hour"];
$id = $_POST["id"];

$conn->query("UPDATE vol SET hour=hour+'$hour' WHERE id='$id'");
header("Location:/staff/vol.php?msg=Updated Successfully!");
die()
?>