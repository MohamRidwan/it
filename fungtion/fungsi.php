<?php

// function perkenalan($a,$b){
//     if ($b>=17) {
//         echo "Umur $a $b tahun, dan $a sudah bisa Punya KTP";
//     }
//     else {
//         echo "Umur $a $b tahun, dan $a belum bisa Punya KTP";
        
//     }
// }
// perkenalan("Mohammad Ridwan",19);


function penjumlahan($angka1 ,$angka2 ){
    $tambah = $angka1 + $angka2;
    echo "Hasil Penjumlahan ".$angka1 ."+" . $angka2 ."=".$tambah;
    $kurang = $angka1 - $angka2;
    echo "<br>Hasil Penjumlahan ".$angka1 ."-" . $angka2 ."=".$kurang;
    $kali = $angka1 * $angka2;
    echo "<br>Hasil Penjumlahan ".$angka1 ."*" . $angka2 ."=".$kali;
    $bagi = $angka1 / $angka2;
    echo "<br>Hasil Penjumlahan ".$angka1 ."/" . $angka2 ."=".$bagi;
}

echo penjumlahan(5,1)."<br>";