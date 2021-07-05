<?php
include('cek.php');
?>
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
      <?php
      session_start();
      $jb = $_SESSION['a'] + $_SESSION['b'];
      if($_SESSION['nyawa']>0){
       if(!isset($_POST['submit'])){
        echo "<h3>Hello {$_COOKIE['nama']} Selamat datang kembali di permainan ini</h3>";
        echo "<p>Lives: <{$_SESSION['nyawa']}> | Score: <{$_SESSION['skor']}></p>";

        echo "Berapakah {$_SESSION['a']} + {$_SESSION['b']} = ";
        echo "<form method='post'>
          <input type='number' name='jawaban' class='form-label'>
          <button type='submit' name='submit' class='btn btn-light btn-sm'>Jawab</button>";
        }else{
        $tb = $_POST['jawaban'];
        if($jb == $tb){
          echo "<h3>Hello {$_COOKIE['nama']} Selamat jawaban anda benar!</h3>";
          $_SESSION['skor'] += 10;
          echo "<p>Lives: <{$_SESSION['nyawa']}> | Score: <{$_SESSION['skor']}></p>";
          echo "<a href='game.php' class='btn btn-light'>Soal Selanjutnya</a>";
        }else{
          echo "<h3>Hello {$_COOKIE['nama']} Sayang jawaban anda salah, tetap semangat ya!</h3>";
          $_SESSION['skor'] -= 2;
          $_SESSION['nyawa'] -=1;
          echo "<p>Lives: <{$_SESSION['nyawa']}> | Score: <{$_SESSION['skor']}></p>";
          echo "<a href='game.php' class='btn btn-light'>Soal Selanjutnya</a>";
      }
        $_SESSION['a'] = rand(0, 20);
        $_SESSION['b'] = rand(0, 20);
      }
    }else{
    echo "<h3>Hello {$_COOKIE['nama']} Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.</h3>";
    echo "<p>Score: <{$_SESSION['skor']}></p>";
    echo "<a href='game.php' class='btn btn-light'>Main Lagi</a>&ensp;";
    echo "<a href='logout.php' class='btn btn-warning'>Logout</a>";

    /* Menambahkan data ke database */
    $mysqli = mysqli_connect('localhost', 'root', '', 'game');
    $nama = $_COOKIE['nama'];
    $skor = $_SESSION['skor'];
    $query1 = "INSERT INTO ranking (nama, skor) VALUES ('$nama', '$skor')";
    $result = mysqli_query($mysqli, $query1);

    /* reset semua */
    $_SESSION['nyawa'] = 5;
    $_SESSION['skor'] = 0;
    $_SESSION['a'] = rand(0, 20);
    $_SESSION['b'] = rand(0, 20);
    
    /* menampilkan dalam tabel */
    echo "<p>";
    $query2 = "SELECT * FROM ranking ORDER BY skor DESC LIMIT 10";
    $index = 1;
    $result2 = mysqli_query($mysqli, $query2);
    if (mysqli_num_rows($result2) > 0) {

        ?>
        
        <table border='1' class="table table-primary table-bordered border-light caption-top">
        <caption style='text-align:center;color:white'><h1>Hall of fame</h1></caption>
        <tr class='table-light'>
        <th>No.</th>
        <th>Nama Player</th>
        <th>Score</th>
        </tr>
    
        <?php
        while($row = mysqli_fetch_assoc($result2)){
            echo"<tr>";
            echo"<td>$index</td>";
            echo"<td>{$row['nama']}</td>";
            echo"<td>{$row['skor']}</td>";
            $index++;
            echo "</tr>";
        }
    
        
        ?>
        
        </table>
        <?php
    }
  echo "</p>";
    mysqli_close($mysqli);
  }
     
      
      ?>

  </div>

    
  </body>
</html>