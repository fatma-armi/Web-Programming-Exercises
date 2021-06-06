<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Client Side</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="serverside.php">Server Side</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <script type="text/javascript">
          $(document).ready(function()) {
            $('tabel-data').DataTable();
          } ;
          </script>
        <div class="container mt-3">
          <div class="row d-flex justify-counter-center">
            <div class="col-sm-9">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tabel Tinggi Permukaan Air</h5>
                  <hr>
                  <table id="tabel-data" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nilai</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include 'koneksi.php';
                      $tma = mysqli_query($koneksi,"select *from tma");
                      while($row = mysqli_fetch_array($tma))
                      {
                        echo "<tr>
                        <td>".$row['id_tma']."</td>
                        <td>".$row['nilai']."</td>
                        <td>".$row['waktu']."</td>
                        <td><button class='btn btn-info'>Edit</button>
                        <button class='btn btn-danger'>Hapus</button></td>
                        </tr>";
                      }
                      ?>
                    </tbody>
    </header>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.datatables.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.D]dataTables.min.js"></script>
  </body>
</html>