
<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata Diri</title>
</head>
<body>
    <h2>Form Biodara Diri</h2>
    <form method= "POST" action="">
    <table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>Tempat lahir</td>
        <td>:</td>
        <td><input type="text" name="lahir" required></td>
    </tr>
    <tr>
        <td>Tanggal lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggal" required></td>
    </tr>
    <tr>
        <td>jenis kelamin</td>
        <td>:</td>
        <td><input type="radio" name="jenis" value="laki-laki" required>Laki-laki
        <input type="radio" name="jenis" value= "perempuan">Perempuan</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" required></textarea></td>
    </tr>

    <tr>
        <td>Agama</td>
        <td>:</td>
        <td><select name="agama" Value="" required>
        <option value="islam" required>islam</option>
        <option value="kristen">kristen</option>
        <option value="budha">budha</option>
        <option value="hindu">hindu</option>
        </select>
        </td>
    </tr>
    
    <tr>
        <td>Pendidikan terakhir</td>
        <td>:</td>
        <td><select name="pendidikan" required>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="SMk">SMK</option>
        </select></td>
    </tr>

    <tr>
        <td>Status</td>
        <td>:</td>
        <td><select name="status" Value="" required>
        <option value="nikah">nikah</option>
        <option value="belum nikah">belum nikah</option>
        <option value="pelajar">pelajar</option>
        </select></td>
    </tr>

    <tr>
        <td>Hobi</td>
        <td>:</td>
        <td><input type="checkbox" name="hobi" value="Olahraga" required>Olahraga
        <input type="checkbox" name="hobi" value="Membaca">Membaca
        <input type="checkbox" name="hobi" value="Main">Main
        </td>
    </tr>
    
    <tr>
        <td>Cita-cita</td>
        <td>:</td>
        <td><input type="checkbox" name="cita" value="TNI" required>TNI
        <input type="checkbox" name="cita" value="Presiden">Presiden
        <input type="checkbox" name="cita" value="guru">guru
        </td>
    </tr>
        
    <tr>
        <td>Kata-kata Bijak</td>
        <td>:</td>
        <td><textarea name="kata" required></textarea></select></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" Value= "kirim"></td>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $lahir = $_POST['lahir'];
    $tanggal = $_POST['tanggal'];
    $jenis = $_POST['jenis'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
    $kata = $_POST['kata'];

    echo "+++++===== BIODATA =====+++++<br>";
echo "nama = $nama <br>";
echo "Tempat lahir = $lahir <br>";
echo "Tanggal lahir= $tanggal <br>";
echo "Jenis kelamin = $jenis <br>";
echo "Alamat = $alamat <br>";
echo "agama = $agama <br>";
echo "Penididkan Terakhir = $pendidikan <br>";
echo "status = $status <br>";
echo "hobi = $hobi <br>";
echo "Cita-cita = $cita <br>";
echo "Kata-kata Bijak = $kata <br>";
}


    
?>  