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
    <div class='container-fluid' style="text-align: center;position: absolute;top: 5%;left: 25%;width: 50%">
    <h1>Selamat datang di game matematika!</h1><br>
    <?php
    if (!isset($_COOKIE['nama'])){
    ?>
    <form method="post" action="login.php">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form><?php 
} else {
  echo "<h3>Hello {$_COOKIE['nama']} Selamat datang kembali di permainan ini</h3>";
  ?>
  <a href="game.php" class="btn btn-light">Mulai game</a>
  <p>Bukan Anda?<a href="logout.php">(klik disini)</a></p>
  <?php
}
?>
  </div>

    
  </body>
</html>