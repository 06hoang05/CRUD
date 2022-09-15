<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqi,"DELETE FROM student WHERE id = '$id'");
header("Locahost:index.php");
?>
