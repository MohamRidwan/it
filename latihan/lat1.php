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
<center><h2><i>Penggajihan</i></h2></center>
<br>
<form method= "POST" action="has1.php">
<div class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Nama Bendahara</label>
    <input type="text" class="form-control"  name="nb" required>
      </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Nama pekerja</label>
    <input type="text" class="form-control" name="np" required>
  </div>

  <div class="mb-3">
    Jenis Kelamin<br>
    <input type="radio" class="form-check-input" id="exampleCheck1"  name ="jk" value ="Laki-laki" required>Laki-Laki
    <input type="radio" class="form-check-input" id="exampleCheck1"  name ="jk" value ="perempuan">perempuan
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Tanggal Gaji</label>
    <input type="date" class="form-control" name="tgl" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" \>jabatan</label>
    <select class ="form-control" name="jabatan" Value="" required>
    <option value="--- Pilih Jabatan ---" required>--- Pilih Jabatan ---</option>
        <option value="Direktur" >Direktur</option>
        <option value="Manager">Manager</option>
        <option value="Karyawan">Karyawan</option>
        <option value="OB">OB</option>
        </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pendidikan Terakhir</label>
    <select class ="form-control" name="pt" Value="" required>
    <option value="--- Pendidikan Terakhir ---" required>--- Pendidikan Terakhir ---</option>
        <option value="SD" >SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA/SMK">SMA/SMK</option>
        <option value="S1">S1</option>
        </select>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Lembur</label>
    <input type="text" class="form-control"  name="lembur" placeholder="Hari/Rp.20.000,-" required>
      </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >potongan</label>
    <input type="text" class="form-control"  name="potongan" required>
      </div>
 
  <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
</div>
</form>


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
