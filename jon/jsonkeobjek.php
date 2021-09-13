<!--  Json Ke Objek PHP -->
<?php

$json = '{
  "nama": "Nurul Huda",
  "domisili": "Surabaya",
  "usia": 23,
  "wni": true,
  "hobi": [
    "Berenang", "Berlari", "Bertamasya"
  ]
}';

$mahasiswa = json_decode($json);

echo "Nama: {$mahasiswa->nama} <br>";
echo "Domisili: {$mahasiswa->domisili} <br>";

echo "Hobi: " . implode(", ", $mahasiswa->hobi);
?>

<!-- Json Ke Array PHP -->
    <?php

    $dataJson = "[5, 3, 4, 2, 1]";

    $data = json_decode($dataJson);

echo implode(" - ", $data); 

?>
<!-- Json Menggunakan Foreach -->
<?php

$listMahasiswaJSON = '[
  { "nama": "Nurul Huda" },
  { "nama": "Renza Ilhami Risqi" },
  { "nama": "Taufan Aji" },
  { "nama": "Rahmad Dwi Oktanto" }
]';

$listMahasiswa = json_decode($listMahasiswaJSON);

foreach ($listMahasiswa as $key => $mahasiswa) {
  echo "{$key}. Nama: {$mahasiswa->nama} <br>";
}
?>