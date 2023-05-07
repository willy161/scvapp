<?php require 'povezava.php';
$id = $_GET['id'];
$sql = "UPDATE obisk SET accepted = 1 WHERE id = $id";
$result = mysqli_query($link, $sql);
header("Location:admin.php?msg=Sprejeto");