<?php require_once 'povezava.php';
$uid = $_POST['ucitelj'];
$id = $_POST['id'];
$sql = "UPDATE obisk SET ucitelj_id = '$uid' WHERE id = '$id'";
mysqli_query($link, $sql);
header("Location:admin.php?msg=Uspesno dodan ucitelj");