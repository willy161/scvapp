<?php require_once 'head.php'?>
<?php require_once 'povezava.php'?>
<?php 
    if($_SESSION['master']==="1")
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
    else
    {
        if($_SESSION['sola_id']==="1")
        {
            echo '<h1>Obiski</h1>';
            $sql = "SELECT * FROM obisk WHERE accepted = 1 AND sola_id = 1";
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
                echo '<form method="POST" action="dodajanjeucitelja.php"><input type="number" value="'.$row['id'].'" name="id" hidden>';
                echo '<select name="ucitelj">';
                $sql3 = "SELECT * FROM ucitelji WHERE sola_id = 1";
                $result3 = mysqli_query($link, $sql3);
                while($row3 = mysqli_fetch_array($result3))
                {
                    echo '<option value="'.$row3['id'].'">'.$row3['ime'].' '.$row3['priimek'].'</option>';
                }
                echo '</select><input type="submit" value="Dodaj Učitelja"></form>';
                echo '</div>';
            }
        }
        if($_SESSION['sola_id']==="2")
        {
            echo '<h1>Obiski</h1>';
            $sql = "SELECT * FROM obisk WHERE accepted = 1 AND sola_id = 2";
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
                echo '<form method="POST" action="dodajanjeucitelja.php"><input type="number" value="'.$row['id'].'" name="id" hidden>';
                echo '<select name="ucitelj">';
                $sql3 = "SELECT * FROM ucitelji WHERE sola_id = 2";
                $result3 = mysqli_query($link, $sql3);
                while($row3 = mysqli_fetch_array($result3))
                {
                    echo '<option value="'.$row3['id'].'">'.$row3['ime'].' '.$row3['priimek'].'</option>';
                }
                echo '</select><input type="submit" value="Dodaj Učitelja"></form>';
                echo '</div>';
            }
        }
        if($_SESSION['sola_id']==="3")
        {
            echo '<h1>Obiski</h1>';
            $sql = "SELECT * FROM obisk WHERE accepted = 1 AND sola_id = 3";
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
                echo '<form method="POST" action="dodajanjeucitelja.php"><input type="number" value="'.$row['id'].'" name="id" hidden>';
                echo '<select name="ucitelj">';
                $sql3 = "SELECT * FROM ucitelji WHERE sola_id = 3";
                $result3 = mysqli_query($link, $sql3);
                while($row3 = mysqli_fetch_array($result3))
                {
                    echo '<option value="'.$row3['id'].'">'.$row3['ime'].' '.$row3['priimek'].'</option>';
                }
                echo '</select><input type="submit" value="Dodaj Učitelja"></form>';
                echo '</div>';
            }
        }
        if($_SESSION['sola_id']==="4")
        {
            echo '<h1>Obiski</h1>';
            $sql = "SELECT * FROM obisk WHERE accepted = 1 AND sola_id = 4";
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
                echo '<form method="POST" action="dodajanjeucitelja.php"><input type="number" value="'.$row['id'].'" name="id" hidden>';
                echo '<select name="ucitelj">';
                $sql3 = "SELECT * FROM ucitelji WHERE sola_id = 4";
                $result3 = mysqli_query($link, $sql3);
                while($row3 = mysqli_fetch_array($result3))
                {
                    echo '<option value="'.$row3['id'].'">'.$row3['ime'].' '.$row3['priimek'].'</option>';
                }
                echo '</select><input type="submit" value="Dodaj Učitelja"></form>';
                echo '</div>';
            }
        }
    }
?>
<?php require_once 'foot.php'?>