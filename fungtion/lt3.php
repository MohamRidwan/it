<!--

function luasSegitiga($a,$b){
    $alas = $a;
    $tinggi = $b;
    $luas = ($alas * $tinggi) / 2;
    echo "Luas Segitiga {$luas}";
}

echo luasSegitiga(10,4);
 -->
<?php

function luasSegitiga($alas,$tinggi){
    
    $luas = ($alas * $tinggi) / 2;
    echo "Luas Segitiga {$luas}";
}

echo luasSegitiga(10,4);
?>