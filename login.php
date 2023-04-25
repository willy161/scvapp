<?php require_once('head.php')?>

<div class="login">
<h2>Login</h2><br>
<form method="POST" action="check.php">
    <div class="items">
<label><b>Username
        </b>
        </label>
    <input type="text" name="username" id="name" placeholder=""><br>
    <label><b>Password
        </b>
        </label>
    <input type="password" name="password" id="pass" placeholder=""><br>
    <input type="submit" value="LOG IN" id="log" name="sub4">
</div>
</form>
</div>



<?php require_once('foot.php')?>