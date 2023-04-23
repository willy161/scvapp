<?php require_once 'head.php'?>
<?php require_once 'povezava.php'?>
<?php 
    if($_SESSION['admin'] === 0)
    {
        echo 'Nimate dostopa do te strani';
        header("Refresh:3;URL=login.php");
    }
    else
    {
        $sql = "SELECT * FROM obisk WHERE accepted = 0";
        $result = mysqli_query($link, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo '<div class="obisk">';
            echo '<h2>'.$row['ime_sole'].'</h2>';
            echo '<h3>'.$row['ime_mentor'].'</h3>';
            echo '<h3>'.$row['st_ucencev'].'</h3>';
            $sql2 = "SELECT * FROM datumi WHERE id = ".$row['datum_id'];
            $result2 = mysqli_query($link, $sql2);
            $row2 = mysqli_fetch_array($result2);
            echo '<h3>'.$row2['datum'].'</h3>';
            echo '<a href="accept.php?id='.$row['id'].'">Sprejmi   </a>';
            echo '<a href="deny.php?id='.$row['id'].'">Zavrni</a>';
            echo '</div>';
        }
    }
?>
<?php require_once 'foot.php'?>