<?php


$nama = "Mohammad Ridwan ";
$ttg = "Bandung 09 agustus 2003 ";
$jk = "Laki-laki ";
$alamat = "Jln.soekarno Hatta. Gg H Abdul Rojak. RT 02/RW 02 ";
echo "<center> <h1> RIVIEW <br> _________________________________________ </h1><br>";
echo "<h2>_____________________________________<br> <br> Biodata <br> _____________________________________</h2>";
echo " Nama : $nama  <br>";
echo "Tempat Tanggal Lahir : $ttg <br>";
echo "Jenis Kelamin : $jk <br>";
echo "Alamat : $alamat </center><br>";
echo "<center> <h1> ____________________________ </h1><br><br><br><br><br>";
// diatas adalah Biodata

echo "<br><h2> _____________________________________<br><br> ARITMATIKA <br>_____________________________________</h2><br>";
$angka1 = 10;
$angka2 = 5;
$penjumlah = $angka1 + $angka2;
$pembagian = $angka1 / $angka2;
$perkalian = $angka1 * $angka2;
$perkurangan = $angka1 - $angka2;
echo "Hasil Penjumlahan : $penjumlah <br>";
echo "Hasil Perkurangan : $perkurangan <br>";
echo "Hasil Pembagian : $pembagian <br>";
echo "Hasil Perkalian : $perkalian <br><h2>_____________________________________</h2>";
// diatas adalah cara penjumlahan

echo "<br><h2> _____________________________________<br><br> BANGUN RUANG <br>_____________________________________</h2><br>";
$panjang = 12;
$lebar = 12;
$alas =12;
$jmlhsegipanjang = $panjang * $lebar;
$jmlhsegitiga = 1/2 * $alas * $panjang;
echo "Menghitung Persegi Panjang <br>";
echo "panjang : $panjang <br>";
echo "lebar : $lebar <br>";
echo "Rumus Luas = Panjang X Lebar <br>";
echo "Luas persegi panjang adalah : $jmlhsegipanjang <br><br><br>";
// luas persegi panjang
echo "Menghitung segitiga <br>";
echo "panjang : $panjang <br>";
echo "alas : $alas <br>";
echo "Rumus Luas = 1/2 X Panjang X alas <br>";
echo "Luas persegi panjang adalah : $jmlhsegitiga <br>";
echo "<br><h2> _____________________________________</h2>";
// luas segitiga
?>