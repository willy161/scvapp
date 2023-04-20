<?php include_once 'seja.php'; ?>
<!DOCTYPE html>
<html lang="sl">
    <head>
        <title>Domov</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="app.css">
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
          }
          else
          {
              echo 'Pozdravljen, gost';
          }
          ?>
    </h1>
   
  </div>

</header>

