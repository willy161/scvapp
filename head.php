<?php include_once 'seja.php'; ?>
<!DOCTYPE html>
<html lang="sl">
    <head>
        <title>Domov</title>
        <script>
    // Get the "msg" parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const msg = urlParams.get('msg');

    // Check if the "msg" parameter is set
    if (msg) {
      // Display an alert with the message
      alert(msg);
    }
  </script>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="app.css">
      <link rel="stylesheet" href="login.css">
      <link rel="stylesheet" href="form.css">
      <link rel="stylesheet" href="dodajdatum.css">
      <link rel="stylesheet" href="pregled.css">
</head>
<body>
<header>

  <div class="logo">
    <img src="slike/scvlogo_page-0001.png" alt="Your logo">
  </div>

  <div class="title">
    <h1><?php 
          if(isset($_SESSION['username']))
          {
              echo 'Pozdravljen, '.$_SESSION['username'];
              if($_SESSION['master']==="1")
              {
                  echo '   <a href="dodajanjedatuma.php">Dodaj datum</a>';
                  echo '   <a href="pregled.php">Pregled</a>';
              }
              echo '   <a href="logout.php">Odjava</a>';
              
          }
          else
          {
              echo 'Pozdravljen, gost   <a href="login.php">Prijava</a>';
          }
          ?>
    </h1>
   
  </div>

</header>

