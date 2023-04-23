<?php require 'povezava.php';
$id = $_GET['id'];
$sql = "UPDATE obisk SET accepted = 2 WHERE id = $id";
$result = mysqli_query($link, $sql);
$sql2 = "UPDATE datumi SET taken = 0 WHERE id = (SELECT datum_id FROM obisk WHERE id = $id)";
$result2 = mysqli_query($link, $sql2);
header("Location:admin.php?msg=Zavrnjeno");