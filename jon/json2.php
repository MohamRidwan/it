<?php
// file json yang di baca
$file = "anggota.json";

// mendapatkan file json
$anggota = file_get_contents($file);

// mendecode anggota.json
$data = json_decode($anggota, true);

// membaca/menampilkan data array menggunakan foreach
foreach ($data as $key => $d) {
    
    echo "No : " .$d['no']; 
    echo "<br>Nama : " .$d['nama'] ."<br>";
    echo "Jurusan : " .$d['jurusan'] ."<br><br>";
}

?>