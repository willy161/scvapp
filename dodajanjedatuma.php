<?php include 'head.php'; ?>
<?php require_once 'povezava.php';
    if($_SESSION['master']==="1")
    {
        echo '<form action="dodajdatum.php" method="post">';
        echo '<input type="datetime-local" name="datum">';
        echo '<input type="submit" value="Dodaj datum">';
    }
    else
    {
        header("Location:login.php?msg=You are not an admin");
    }
?>
<?php include 'foot.php'; ?>