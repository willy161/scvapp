<?php include 'head.php'; ?>
<?php require_once 'povezava.php';
    if($_SESSION['master']==="1")
    {
        $sql = "SELECT * FROM obisk WHERE accepted = 1 AND ucitelj_id IS NOT NULL ORDER BY datum_id ASC";
        $result = mysqli_query($link, $sql);
        echo '<div id="naslov_pregled">';
        echo '<h2>Potrjeni prihodi</h2>';
        echo '</div>';
        while($row = mysqli_fetch_array($result))
        {
            echo '<div class="pregled">';
           
            echo '<table border=3 bordercolor=" purple">';
            echo '<tr>';
            echo '<th>'.$row['ime_sole'].'</th>';
            echo '<td>'.$row['ime_mentor'].'</td>';
            echo '<td>'.$row['st_ucencev'].'</td>';
            echo '<td>'.$row['email'].'</td>';
            $sql2 = "SELECT * FROM datumi WHERE id = ".$row['datum_id'];
            $result2 = mysqli_query($link, $sql2);
            $row2 = mysqli_fetch_array($result2);
            echo '<td>'.$row2['datum'].'</td>';
            $sql3 = "SELECT * FROM ucitelji WHERE id = ".$row['ucitelj_id'];
            $result3 = mysqli_query($link, $sql3);
            $row3 = mysqli_fetch_array($result3);
            echo '<td id="brez">'.$row3['ime'].' '.$row3['priimek'].'</td>';
            echo '</tr>';
            echo '</table>';
            echo '</div>';
          
        }
    }
    else
    {
        header("Location:login.php?msg=You are not an admin");
    }
?>
