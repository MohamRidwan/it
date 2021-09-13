<?php
 $nama = ['Palah','Aziz','Aliul','Adzura','Nabila','Cecep','Cindi',
'Maudy','Diki','Dinda'];
 $nilai = [10,20,30,40,50,60,70,80,90,100];
// di bawah menampilkan salah satu nama dan nilas 
 echo "Nilai Produktif Siswa<br>";
 echo $nama[0]." = ".$nilai[6] ."<br>";
 echo $nama[9]." = ".$nilai[7] ."<br>";
 echo $nama[5]." = ".$nilai[8] ."<br>";
 echo $nama[7]." = ".$nilai[9] ."<br>";
 echo $nama[4]." = ".$nilai[5] ."<br><br><br>";
// di bawah menampilkan semua nama
 foreach($nama as $x => $val) {
    echo " $val<br>";
  }
?>