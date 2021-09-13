<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h2>Starat Masuk Ke MicoMoll</h2>
    <form method= "POST" action="">
    <table>
    <tr>
        <td>Nama Anda</td>
        <td>:</td>
        <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>umur</td>
        <td>:</td>
        <td><input type="text" name="umur" required></td>
    </tr>
    <tr>
    <td>Setatus Vaksin </td>
    <td>:</td>
    <td><select name="vaksin" Value="" required>
    <option value="--- Pendidikan Terakhir ---" required>--- Pendidikan Terakhir ---</option>
        <option value="sudah vaksin" >sudah vaksin</option>
        <option value="belum vaksin">belum vaksin</option>
        </select>
        </td>
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
    $umur = $_POST['umur'];
    $vaksin = $_POST['vaksin'];
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

                    ?>
  <tr> <td></td><td></td><td><a href="https://pedulilindungi.id/">daftar bila belum vaksin</a> </td></tr>
 <?php

                    
                    
                    break;
                }
            }
            else {
                echo "<tr><td>Umur</td><td> :</td><td>$umur</td></tr> ";
                echo "<tr><td></td><td></td><td><b><i>TIDAK DI IJINKAN MASUK</i></b></td></tr>";
                ?>
                <tr> <td></td><td></td><td><a href="https://pedulilindungi.id/">daftar bila belum vaksin</a> </td></tr>
               <?php
            }
        echo"</table>";
}
?>