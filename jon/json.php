<?php

// $mahasiswa = ['nama' => 'Mohammad Ridwan',
// 'domisili' => 'Bandung'];
//   json_encode($mahasiswa);

// $nilaiUjian = [70, 80, 50, 90];
// echo json_encode($nilaiUjian);


$listMahasiswaJSON = '[
    { "nama": "Nurul Huda" },
    { "nama": "Renza Ilhami Risqi" },
    { "nama": "Taufan Aji" },
    { "nama": "Rahmad Dwi Oktanto" }
  ]';
  
  $listMahasiswa = json_decode($listMahasiswaJSON);
  
  foreach ($listMahasiswa as $key => $mahasiswa) {
    echo " Nama: {$mahasiswa->nama} <br>";
  }
?>