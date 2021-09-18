<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Gajih Smk Assalaam Bandung</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
        <h1>Gajih Smk Assalaam Bandung</h1>

    </div>
</nav>

<br><br>
<center>
<form method= "POST" action="has_gaji.php">
    <img src="logo-ass.png" alt=""><br><br><br>
    <div class="btn btn-primary">
    <h2>PENGGAJIHAN <br> GURU KARYAWAN YAYASAN ASSALAAM</h2>
    <div class="btn btn-outline-warning">
            <center>
            <table>
            <tr>
                <td>No</td>
                <td><input type="number" name="no"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Unit</td>
                <td>
                    
                    <select  name="unit" Value="" required>
                        <option value="TK" >TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal </td>
                <td><input type="date" name="tgl"></td>
                
                
                
            </tr>
            <tr><td></td><td><br><h5>Gaji</h5><br></td></tr>
            
            
            <tr>
                <td>Jabatan</td>
                <td>
                    <select  name="jb" Value="" required>
                        <option value="Kepala Sekolah" >Kepala Sekolah</option>
                        <option value="Guru">Guru</option>
                        <option value="Karyawan">Karyawan</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Lama Kerja</td>
                    <td><input type="number" name="laker"></td>
                </tr>
                <tr>
                    <td>Setatus Kerja</td>
                    <td>
                        <select  name="sk" Value="" required>
                            <option value="Pegawai Tetap" >Pegawai Tetap</option>
                            <option value="Pegawai Kontrak">Pegawai Kontrak</option>
                        </select></td>
                    </tr>
                </tr>
                <tr><td></td><td><br><h5>Potongan</h5><br></td></tr>
                <tr>
                    <td>BPJS</td>
                    <td><input type="number" name="bpjs"></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td><input type="number" name="pinjam"></td>
                </tr>
                <tr>
                    <td>Tabungan</td>
                    <td><input type="number" name="nabung"></td>
                </tr>
                <tr>
                    <td>Lainnya</td>
                    <td><input type="number" name="lain"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <br><button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                    </td>
                </tr>
            </table>
            </div>
        </center>
        </div>
    </form>
    </center>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
    
  </body>
</html>