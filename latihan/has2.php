<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Penggajihan</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="kombinasi.php">Mohammad Ridwan</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="lat1.php">penggajihan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lat2.php">vaksin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lat3.php">pengulangan</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<br><br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $vaksin = $_POST['vaksin'];
    ?>
    <center><div class="btn btn-outline-primary">
    <?php
    echo"<table>";
    echo "<tr><td>Nama</td> <td>:</td><td> $nama </td></tr>";
    if ($umur >= 12 && $umur <= 50 ) {
        echo "<tr><td>Umur</td><td> :</td><td>$umur</td></tr> "; 
        switch ($vaksin) {
            case 'sudah vaksin':
                echo "<tr><td></td><td></td><td><b><i>DI IJINKAN MASUK</i></b></td></tr>";
                break;
                
                case 'belum vaksin':
                    echo "<tr><td></td><td></td><td><b><i>TIDAK DI IJINKAN MASUK</i></b></td></tr>";
                    echo "<Center><b>Mohon maaf Anda Tidak Di Perijinkan Masuk <br> Ke Miko Mall </b></center> <br>";
                    ?>
  <tr> <td></td><td></td><td><a href="https://pedulilindungi.id/" class="btn btn-outline-dark">daftar bila belum vaksin</a> </td></tr>
 <?php



                    break;
                }
            }
            else {
                echo "<tr><td>Umur</td><td> :</td><td>$umur</td></tr> ";
                echo "<tr><td></td><td></td><td><b><i>TIDAK DI IJINKAN MASUK</i></b></td></tr>";
                echo "<Center><b>Mohon maaf Anda Tidak Di Perijinkan Masuk <br> Ke Miko Mall </b></center> <br>";
                ?>
                <tr> <td></td><td></td><td><a href="https://pedulilindungi.id/" class="btn btn-outline-dark">daftar bila belum vaksin</a> </td></tr>
               <?php
            }
            echo"</table>";
            ?>
            </div></center>
            <?php
        }
?>