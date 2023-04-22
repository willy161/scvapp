<?php require_once('head.php')?>

<div class="login">
<h2>Login</h2><br>
<form method="POST" action="check.php">
    <div class="items">
<label><b>Username
        </b>
        </label>
    <input type="text" name="username" id="name" placeholder="Enter username..."><br>
    <label><b>Password
        </b>
        </label>
    <input type="password" name="password" id="pass" placeholder="Enter password..."><br>
    <input type="submit" value="Log In" id="log" name="sub4">
</div>
</form>
</div>



<?php require_once('foot.php')?>