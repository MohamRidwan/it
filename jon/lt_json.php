<?php
$file = "latihan.json";

// mendapatkan file json
$anggota = file_get_contents($file);

$mahasiswa = json_decode($anggota, true);
foreach ($mahasiswa as $a) {
    echo "Nama : " .$a['nama']."<br>";
    echo "Domisili : " .$a['domisili'] ."<br>";
    echo "Hobi: "; 
    echo "<ul>";
    echo "<li>";
    echo implode("<li> ", $a['Hoby']) ."</li><br>";
    echo "</li>";
    echo "</ul>";
    
}