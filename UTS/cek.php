<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Game Matematika</title>
  </head>
  <body style="background-color: #eb4d4b">
    <?php

      if (!isset($_COOKIE['nama'])){
          ?>
      <div class='container-fluid' style="text-align: center;position: absolute;top: 5%;left: 25%;width: 50%">
      <?php
          
          echo "<p><h1>Maaf anda tidak memiliki akses ke halaman ini</h1></p>";
          echo "<h4><p>Silahkan <a href='index.php' class='btn btn-light btn-sm'>Log In</a> terlebih dahulu</p></h4>";
          exit();
      }

     ?>
  </div>   
  </body>
</html>