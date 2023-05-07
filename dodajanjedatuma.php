<?php include 'head.php'; ?>
<?php require_once 'povezava.php';
    if($_SESSION['master']==="1")
    {
        echo '<div class="form-main">';
        echo '<div class="form_dodaj">';
        echo '<h1>Dodaj datum obiska</h1>';
        echo '<form action="dodajdatum.php" method="post">';
        echo '<input type="datetime-local" name="datum"> </br>';
        echo '<input type="submit" id="submit" value="Dodaj datum">';
        echo '</div>';
        echo '</div>';
    }
    else
    {
        header("Location:login.php?msg=You are not an admin");
    }
?>
<?php include 'foot.php'; ?>