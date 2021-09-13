<?php

function hitungUmur($thn_lahir,$thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama,$salam="Assalaamualaikum"){
    echo $salam.",";
    echo "perkenalkan,nama saya ".$nama ."<br>";
    echo "Saya Berusia " .hitungumur(2003,2021)." tahun <br>";
    echo "Senang berkenalan dengan Anda <hr>";
}

echo perkenalan("Mohammad Ridwan");
?>