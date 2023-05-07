
<?php require_once 'povezava.php';
session_start();
$ml=mysqli_escape_string($link,$_POST['username']);
$escape=mysqli_escape_string($link,$_POST['password']);
$pas=sha1($escape).'U(A#GRibasb';
if(!isset($_POST['sub4']))
{
    header("Location:login.php");
}
else
{
    // sql stavek
    $sql="SELECT * FROM admini WHERE username='$ml' AND password ='$pas';";
    // sprožimo poizvedbo
    $result=mysqli_query($link, $sql);
    $row= mysqli_fetch_array($result);
    /*
    $kolk= mysqli_num_rows($result);
    echo $kolk;
    */
    if(mysqli_num_rows($result)===1)
    {
        $_SESSION['id']=$row['id'];
		$_SESSION['username']=$row ['username'];
		$_SESSION['password']=$row['password'];
        $_SESSION['master']=$row['master'];
        $_SESSION['sola_id']=$row['sola_id'];
       header("Location:admin.php") ;
    
    }
    else {
            
    header("Refresh:3;URL=login.php");
    echo '<div class="message">';
	echo '<p>Login Unsuccessful</p>';  
    echo '</div>';
	}
}