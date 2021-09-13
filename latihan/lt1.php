<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gajih Pegawai</title>
</head>
<body>
<center>
<h2>Perogram Penggajihan</h2>
<h2>PT.GARUDA KELINCI AKUR</h2>
<form method= "POST" action="">
    <table>
    <tr>
        <td>Nama Bendahara</td>
        <td>:</td>
        <td><input type="text" name="nb" required></td>
    </tr>
    
    <tr>
        <td>Nama Pekerja</td>
        <td>:</td>
        <td><input type="text" name="np" required></td>
    </tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jk" value="Laki-laki">Laki-laki
    <input type="radio" name="jk" value="Perempuan">Perempuan
    </tr>
    
    <tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><input type="date" name="tgl" required></td>
    </tr>

    <tr>
    <td>Jabatan </td>
    <td>:</td>
    <td><select name="jabatan" Value="" required>
    <option value="--- Pilih Jabatan ---" required>--- Pilih Jabatan ---</option>
        <option value="Direktur" >Direktur</option>
        <option value="Manager">Manager</option>
        <option value="Karyawan">Karyawan</option>
        <option value="OB">OB</option>
        </select>
        </td>
    </tr>
    <tr>
    <td>Pendidikan Terakhir </td>
    <td>:</td>
    <td><select name="pt" Value="" required>
    <option value="--- Pendidikan Terakhir ---" required>--- Pendidikan Terakhir ---</option>
        <option value="SD" >SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA/SMK">SMA/SMK</option>
        <option value="S1">S1</option>
        </select>
        </td>
    </tr>

    <tr>
    <td>Lembur</td>
    <td>:</td>
    <td><input type="text" name="lembur" required>Hari/Rp.20.000,-</td>
    </tr>

    <tr>
    <td>Potongan</td>
    <td>:</td>
    <td><input type="text" name="potongan" required></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" Value= "kirim"></td>
    </tr>
    </table>
    </form>
</center>
</body>
</html>

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