<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Array</title>
</head>
<body><center>
<h2>Data Siswa Kelas XII RPL</h2>

<form method= "POST" action="">
<table>
<tr>
    <td>Jumlah Siswa</td>
    <td>:</td>
    <td><input type="text" name="JSiswa" required></td>
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
    $siswa = $_POST['JSiswa'];
    ?>
    <form action="hasilformarray1.php" method="post">
    <table>
<?php
for ($i=1; $i <= $siswa ; $i++) { 
    ?>
    <tr>
    <td></td>
    <td></td>
    <td>Data Siswa Ke - <?php echo $i; ?></td>
    </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama[]"></td>
    </tr>
    
    <tr>
    <td>kelas</td>
    <td>:</td>
    <td><input type="text" name="kelas[]"></td>
    </tr>

    <tr>
    <td>Jurusan</td>
    <td>:</td>
    <td><input type="text" name="jurusan[]"></td>
    </tr>
    <?php
}
?>
    
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" Value= "kirim"></td>
    </tr>
    </table>
    </form>
 <?php   
}
?>
</center>