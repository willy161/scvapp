<?php include 'head.php'; ?>
<?php require_once 'povezava.php';
    if($_SESSION['master']==="1")
    {
        $sql = "SELECT * FROM obisk WHERE accepted = 1 AND ucitelj_id IS NOT NULL ORDER BY datum_id ASC";
        $result = mysqli_query($link, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo '<div class="pregled">';
            echo '<div class="obisk_pregled">';
            echo '<h2>'.$row['ime_sole'].'</h2>';
            echo '<h3>'.$row['ime_mentor'].'</h3>';
            echo '<h3>'.$row['st_ucencev'].'</h3>';
            echo '<h3>'.$row['email'].'</h3>';
            $sql2 = "SELECT * FROM datumi WHERE id = ".$row['datum_id'];
            $result2 = mysqli_query($link, $sql2);
            $row2 = mysqli_fetch_array($result2);
            echo '<h3>'.$row2['datum'].'</h3>';
            $sql3 = "SELECT * FROM ucitelji WHERE id = ".$row['ucitelj_id'];
            $result3 = mysqli_query($link, $sql3);
            $row3 = mysqli_fetch_array($result3);
            echo '<h3>'.$row3['ime'].' '.$row3['priimek'].'</h3>';
            echo '</div>';
            echo '</div>';
        }
    }
    else
    {
        header("Location:login.php?msg=You are not an admin");
    }
?>
