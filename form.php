<?php require_once('head.php')?>
    <form id="obiskform" method="post" action ="confirm.php">
    <input type="text" name="imesole" placeholder="Ime sole"><br/>
    <input type="text" name="imeucitelja" placeholder="Ime učitelja"><br/>
    <input type="number" name="stucencev" placeholder="Število učencev"><br/>
    <select name="datumobiska" class="input"  form="obiskform"><br/>
        <?php require_once 'povezava.php';
        $sql="SELECT * FROM datumi WHERE taken = 0";
        $result=mysqli_query($link, $sql);
        while($row=mysqli_fetch_array($result))
        {
            echo '<option value="'.$row['id'].'">'.$row['datum'].'</option>';
        }
        ?>
    </select><br />
    <input type="submit" name="sub" value="Pošlji">
    </form>
<?php require_once('foot.php')?>