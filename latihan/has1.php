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
<br>
<br>


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
<center>
<div class="btn btn-outline-dark">
<?php
if(isset($_POST['simpan'])){
  $np = $_POST['np'];
  $nb = $_POST['nb'];
  $jk = $_POST['jk'];
  $tgl = $_POST['tgl'];
  $jabatan = $_POST['jabatan'];
    $pt = $_POST['pt'];
    $lembur = $_POST['lembur'];
    $potongan = $_POST['potongan'];
    
    echo "<center><h2>Strukt Gaji Karyawan</h2><br>";
    echo "--------------------------------------------------------------------------------<br>";
    echo "---------<br>";
    echo "<table>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><b>Tanggal : <i>$tgl</i> </b></td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td><b><i>Gaji Pokok</i><br></b></td>";
    echo "</tr>";
    echo "<tr></tr>";
    echo "<tr></tr>";
    echo "<tr>";
    
    echo "<td>Nama Karyawan</td>";
    echo "<td> :</td>";
    echo "<td> $np</td></tr>";
    
    echo "<tr>";
    echo "<td>Jenis Kelamin</td>";
    echo "<td> : </td>";
    echo "<td>$jk</td></tr>";
    
    echo "<tr>";
    echo "<td>Pendidikan Terakhir</td>";
    echo "<td> : </td>";
    echo "<td>$pt</td></tr>";
    
    echo "<tr>";
    echo "<td>Jabatan </td>";
    echo "<td>:</td>";
    echo "<td> $jabatan</td>";
    
    if ($jabatan == "Direktur") {
      $jabatan = 10000000;
      echo "<tr>";
      echo "<td>Gaji </td>";
      echo "<td>:</td>";
      echo "<td>Rp.$jabatan</td></tr>";    
      }
      else if ($jabatan == "Manager") {
        $jabatan = 7500000;
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>Rp.$jabatan</td></tr>";    
    }
    else if ($jabatan == "Karyawan") {
      $jabatan = 5000000;
      echo "<tr>";
      echo "<td>Gaji </td>";
      echo "<td>:</td>";
      echo "<td>Rp.$jabatan</td></tr>";    
    }
    else if ($jabatan == "BO") {
        $jabatan = 2500000;
        echo "<tr>";
        echo "<td>Gaji </td>";
        echo "<td>:</td>";
        echo "<td>Rp.$jabatan</td></tr>";    
      }
      
      echo "<tr>";
      echo "<td><b><i>Tunggakan</i></b></td></tr>";
      
      if ($pt == "SD") {
        $pt = 250000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan</td>";
        echo "<td> : </td>";
        echo "<td>Rp.$pt</td></tr>";
        
      }
      else if ($pt == "SMP") {
      $pt = 500000;
      echo "<tr>";
      echo "<td>Tunjangan Pendidikan</td>";
      echo "<td> : </td>";
        echo "<td>Rp.$pt</td></tr>";
        
      }
      else if ($pt == "SMA/SMK") {
        $pt = 1000000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan</td>";
        echo "<td> : </td>";
        echo "<td>Rp.$pt</td></tr>";
        
      }
      else if ($pt == "S1") {
      $pt = 1500000;
      echo "<tr>";
      echo "<td>Tunjangan Pendidikan</td>";
      echo "<td> : </td>";
      echo "<td>Rp.$pt</td></tr>";
      
    }
    if ($lembur) {
      $blembur = $lembur * 20000;
      echo "<tr>";
      echo "<td>Vaksi Lembur</td>  ";
      echo "<td>:</td>";
      echo "<td>Rp.$blembur</td></tr>";
    }
    else if ($lembur=="0") {
      echo "<tr>";
      echo "<td>Vaksi Lembur</td>  ";
        echo "<td>:</td>";
        echo "<td>Rp.0</td></tr>";
      }
      echo "<tr>";
    echo "<td><b><i>Potongan</i></b></td></tr>";
    
    echo "<tr>";
    echo "<td>Potongan</td> ";
    echo "<td>:</td>";
    echo "<td>Rp.$potongan</td></tr>";
    
    if ($lembur) {
      # code...
        echo "<tr>";
        echo "<td>Total Gaji</td>  ";
        echo "<td>:</td>";
        $gaji = $jabatan + $pt + $blembur - $potongan;
        echo "<td>Rp.$gaji</td></tr>";
      }
      else {
        # code...
        echo "<tr>";
        echo "<td>Total Gaji</td>  ";
        echo "<td>:</td>";
        $gaji = $jabatan + $pt + $lembur - $potongan;
        echo "<td>Rp.$gaji</td></tr>";
      }
      echo "<tr>";
    echo "<td></td><td></td><td></td>";
    echo "<td>Bendahara : $nb</td>";
    echo "</table>";
  }
  ?>
  </div> 
  </center>