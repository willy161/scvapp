<?php require_once 'povezava.php';
    $datum = $_POST['datum'];
    $sql = "INSERT INTO datumi (datum, taken) VALUES ('$datum', 0)";
    mysqli_query($link, $sql);
    header("Location:admin.php?msg=Uspesno dodan datum");