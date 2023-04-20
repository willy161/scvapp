<?php require_once 'povezava.php';
session_start();
$sql = "SELECT * FROM datumi";
$result = mysqli_query($link, $sql);
echo '<select name = "test">';
while($row = mysqli_fetch_array($result))
{
    echo 'option value="'.$row['id'].'">'.$row['datum'].'</option>';
}
echo 'peder';