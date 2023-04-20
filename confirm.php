<?php require_once 'povezava.php'; 
$imesole = $_POST['imesole'];
$imeucitelja = $_POST['imeucitelja'];
$stucencev = $_POST['stucencev'];
$datumobiska = $_POST['datumobiska'];
$sql = "SELECT max(id) as id1 FROM obisk";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$id = $row['id1'] + 1;
$sql = "INSERT INTO obisk (id, ime_sole, ime_mentor, st_ucencev, datum_id) VALUES ('$id', '$imesole', '$imeucitelja', '$stucencev', '$datumobiska')";
mysqli_query($link, $sql);
$sql = "UPDATE datumi SET taken = 1 WHERE id = '$datumobiska'";
mysqli_query($link, $sql);
header("Location:home.php");
?>