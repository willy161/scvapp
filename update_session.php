<?php

session_start();
if (isset($_POST['sola_id'])) {
    $_SESSION['sola_id'] = $_POST['sola_id'];
    echo 'success';
    echo $_SESSION['sola_id'];
} else {
    echo 'error';
}
/*if (isset($_POST['sola_id'])) {
  // Map the ID back to the corresponding color
  $colorIds = array(
    1 => "#a6ce39",
    2 => "#0096db",
    3 => "#f359a1",
    4 => "#fece00"
  );
  
  $color = $colorIds[$_POST['sola_id']];
  $_SESSION['sola_id'] = $_POST['sola_id'];
}*/
?>