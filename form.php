<?php require_once('head.php')?>
    <form id="obiskform" method="post" action ="confirm.php">
        <div class="form-main">
        <div class="form">
            <label>Izpolnite podatke za prijavo</label><br/>
    <input type="text" name="imesole" placeholder="Ime sole"><br/>
    <input type="text" name="imeucitelja" placeholder="Ime učitelja"><br/>
    <input type="email" name="email" placeholder="Email"><br/>
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
    <input type="submit" id="submit" name="sub" value="Pošlji">
    
    </div>
    </div>
    </form>
<?php require_once('foot.php')?>