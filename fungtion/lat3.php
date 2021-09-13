<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
<center>

<a href="lat1.php"><button>Latihan 1</button></a> 
<a href="lat2.php"><button>Latihan 2</button></a> 
<a href="lat3.php"><button>Latihan 3</button></a> 
</center>
<fieldset>
        <legend><h2>Biodata</h2>  </legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td><b>Nis<b></td>
                    <td>:</td>
                    <td><input type="number" name="nis" id=""></td>
                </tr>
                <tr>
                    <td><b>nama<b></td>
                    <td>:</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin<b></td>
                    <td>:</td>
                    <td><input type="radio" name="jk" value="laki-laki">laki-laki
                        <input type="radio" name="jk" value="perempuan">perempuan</td>
                </tr>
                <tr>
                    <td><b>Tanggal Lahir</b></td>
                    <td>:</td>
                    <td><input type="date" name="tl"></td>
                </tr>
                <tr>
                    <td><b>Agama</b></td>
                    <td>:</td>
                    <td><select name="agama" >
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                    </select></td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>:</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td><b>Hobi</b></td>
                    <td>:</td>
                    <td><input type="checkbox" name="hobi[]" value="Main Layangan">Main layangan <br>
                    <input type="checkbox" name="hobi[]" value="Main Hp">Main Hp <br>
                    <input type="checkbox" name="hobi[]" value="olahraga">olahraga  <br>
                    <input type="checkbox" name="hobi[]" value="Mancing">Mancing  <br>
                    <input type="checkbox" name="hobi[]" value="Baca Buku">Baca Buku  <br>
                    <input type="checkbox" name="hobi[]" value="Main Alat Musik">Main Alat Musik  <br>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="save">Simpan</button>
            </tr>
        </form>
    </table>
    </fieldset>
    <br><br>
    <fieldset>

        <?php 
    
    
    
    function biodata(){
        if (isset($_POST['save'])) {
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $tl = $_POST['tl'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];
            $hobi = $_POST['hobi'];
            
           ?>

<h2><center>Biodata Anda</center></h2>

<table>
    <tr><td>Nis</td>
    <td>:</td>
    <td><?php echo $nis; ?></td>
    <tr><td>nama</td>
    <td>:</td>
    <td><?php echo $nama; ?></td>
    <tr><td>Jenis Kelamin</td>
    <td>:</td>
    <td><?php echo $jk; ?></td>
    <tr><td>Tanggal Lahir</td>
    <td>:</td>
    <td><?php echo $tl; ?></td>
    <tr><td>Agama</td>
    <td>:</td>
    <td><?php echo $agama; ?></td>
    <tr><td>Alamat</td>
    <td>:</td>
    <td><?php echo $alamat; ?></td>
    <tr><td>Hobi</td>
    <td>:</td>
    <td>
        
        <?php
    foreach ($hobi as $hobis) {
        ?>
        <?php echo "<li>".$hobis."</li>";?> 
        <?php
            }
            ?>
            </td>
            <?php
        } 
    }
    biodata(); 
    ?>
            </tr> 
        </table>
    </fieldset>
        
        
        
        
        
</body>
</html>