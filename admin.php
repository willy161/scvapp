<?php require_once 'head.php'?>
<?php require_once 'povezava.php'?>
<?php 
    if($_SESSION['master']==="1")
    {
        $sql = "SELECT * FROM obisk WHERE accepted = 0 ORDER BY datum_id ASC";
        $result = mysqli_query($link, $sql);
        echo '<div class="container">';
        while($row = mysqli_fetch_array($result))
        {

            echo '<div class="admin">';
            echo '<table border=3 bordercolor=" purple">';
            echo '<tr>';
            echo '<th>'.$row['ime_sole'].'</th>';
            echo '<td>'.$row['ime_mentor'].'</td>';
            echo '<td>'.$row['st_ucencev'].'</td>';
            $sql2 = "SELECT * FROM datumi WHERE id = ".$row['datum_id'];
            $result2 = mysqli_query($link, $sql2);
            $row2 = mysqli_fetch_array($result2);
            echo '<td id="brez">'.$row2['datum'].'</td>';
            
            echo '<a href="accept.php?id='.$row['id'].'"> <div class="tick"></div></a>';
           
            echo '<a href="deny.php?id='.$row['id'].'"><div class="close"></div></a>';
            
            echo '</tr>';
            echo '</table>';
            echo '</div>';
        }
          echo '</div>';
    }
    else
    {
        if($_SESSION['sola_id']==="1")
        {
            echo '<h1>Obiski</h1>';
            $sql = "SELECT * FROM obisk WHERE accepted = 1 AND sola_id = 1 AND ucitelj_id IS NULL ORDER BY datum_id ASC";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result))
            {
                echo '<div class="admin">';
                echo '<table border=3 bordercolor=" purple">';
                echo '<tr>';
                echo '<th>'.$row['ime_sole'].'</th>';
                echo '<td>'.$row['ime_mentor'].'</td>';
                echo '<td>'.$row['st_ucencev'].'</td>';
                $sql2 = "SELECT * FROM datumi WHERE id = ".$row['datum_id'];
                $result2 = mysqli_query($link, $sql2);
                $row2 = mysqli_fetch_array($result2);
                echo '<td id="brez">'.$row2['datum'].'</td>';
                echo '<form method="POST" action="dodajucitelja.php"><input type="number" value="'.$row['id'].'" name="id" hidden>';
                echo '<select name="ucitelj">';
                $sql3 = "SELECT * FROM ucitelji WHERE sola_id = 1";
                $result3 = mysqli_query($link, $sql3);
                while($row3 = mysqli_fetch_array($result3))
                {
                    echo '<option value="'.$row3['id'].'">'.$row3['ime'].' '.$row3['priimek'].'</option>';
                }
                echo '</select><input type="submit" value="Dodaj Učitelja"></form>';
                echo '</tr>';
                echo '</table>';
                echo '</div>';
            }
        }
        if($_SESSION['sola_id']==="2")
        {
            echo '<h1>Obiski</h1>';
            $sql = "SELECT * FROM obisk WHERE accepted = 1 AND sola_id = 2 ucitelj_id IS NULL ORDER BY datum_id ASC";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result))
            {
                echo '<div class="admin">';
                echo '<table border=3 bordercolor=" purple">';
                echo '<tr>';
                echo '<th>'.$row['ime_sole'].'</th>';
                echo '<td>'.$row['ime_mentor'].'</td>';
                echo '<td>'.$row['st_ucencev'].'</td>';
                $sql2 = "SELECT * FROM datumi WHERE id = ".$row['datum_id'];
                $result2 = mysqli_query($link, $sql2);
                $row2 = mysqli_fetch_array($result2);
                echo '<td id="brez">'.$row2['datum'].'</td>';
                echo '<form method="POST" action="dodajucitelja.php"><input type="number" value="'.$row['id'].'" name="id" hidden>';
                echo '<select name="ucitelj">';
                $sql3 = "SELECT * FROM ucitelji WHERE sola_id = 2";
                $result3 = mysqli_query($link, $sql3);
                while($row3 = mysqli_fetch_array($result3))
                {
                    echo '<option value="'.$row3['id'].'">'.$row3['ime'].' '.$row3['priimek'].'</option>';
                }
                echo '</select><input type="submit" value="Dodaj Učitelja"></form>';
                echo '</tr>';
                echo '</table>';
                echo '</div>';
            }
        }
        if($_SESSION['sola_id']==="3")
        {
            echo '<h1>Obiski</h1>';
            $sql = "SELECT * FROM obisk WHERE accepted = 1 AND sola_id = 3 ucitelj_id IS NULL ORDER BY datum_id ASC";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result))
            {
                echo '<div class="admin">';
                echo '<table border=3 bordercolor=" purple">';
                echo '<tr>';
                echo '<th>'.$row['ime_sole'].'</th>';
                echo '<td>'.$row['ime_mentor'].'</td>';
                echo '<td>'.$row['st_ucencev'].'</td>';
                $sql2 = "SELECT * FROM datumi WHERE id = ".$row['datum_id'];
                $result2 = mysqli_query($link, $sql2);
                $row2 = mysqli_fetch_array($result2);
                echo '<td id="brez">'.$row2['datum'].'</td>';
                echo '<form method="POST" action="dodajucitelja.php"><input type="number" value="'.$row['id'].'" name="id" hidden>';
                echo '<select name="ucitelj">';
                $sql3 = "SELECT * FROM ucitelji WHERE sola_id = 3";
                $result3 = mysqli_query($link, $sql3);
                while($row3 = mysqli_fetch_array($result3))
                {
                    echo '<option value="'.$row3['id'].'">'.$row3['ime'].' '.$row3['priimek'].'</option>';
                }
                echo '</select><input type="submit" value="Dodaj Učitelja"></form>';
                echo '</tr>';
                echo '</table>';
                echo '</div>';
            }
        }
        if($_SESSION['sola_id']==="4")
        {
            echo '<h1>Obiski</h1>';
            $sql = "SELECT * FROM obisk WHERE accepted = 1 AND sola_id = 4 ucitelj_id IS NULL ORDER BY datum_id ASC";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_array($result))
            {
                echo '<div class="admin">';
                echo '<table border=3 bordercolor=" purple">';
                echo '<tr>';
                echo '<th>'.$row['ime_sole'].'</th>';
                echo '<td>'.$row['ime_mentor'].'</td>';
                echo '<td>'.$row['st_ucencev'].'</td>';
                $sql2 = "SELECT * FROM datumi WHERE id = ".$row['datum_id'];
                $result2 = mysqli_query($link, $sql2);
                $row2 = mysqli_fetch_array($result2);
                echo '<td id="brez">'.$row2['datum'].'</td>';
                echo '<form method="POST" action="dodajaucitelja.php"><input type="number" value="'.$row['id'].'" name="id" hidden>';
                echo '<select name="ucitelj">';
                $sql3 = "SELECT * FROM ucitelji WHERE sola_id = 4";
                $result3 = mysqli_query($link, $sql3);
                while($row3 = mysqli_fetch_array($result3))
                {
                    echo '<option value="'.$row3['id'].'">'.$row3['ime'].' '.$row3['priimek'].'</option>';
                }
                echo '</select><input type="submit" value="Dodaj Učitelja"></form>';
                echo '</tr>';
                echo '</table>';
                echo '</div>';
            }
        }
    }
?>
<?php require_once 'foot.php'?>