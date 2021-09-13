<?php
echo "<center>";
echo "Data Film <br>";

$file = "lt2.json";

// mendapatkan file json
$anggota = file_get_contents($file);

$mahasiswa = json_decode($anggota, true);
echo "<b>" .$mahasiswa['Title'] ."</b><br>";
?>
<img src="spider-verse.jpg" alt=""><br>
<table>
    <?php
    echo "</center>";
echo "<tr><td></td><td></td><td>";
echo "<br>" .$mahasiswa['Plot'] ."<br>";
echo $mahasiswa['plot2'] ."<br>";
echo $mahasiswa['plot3'] ."<br>";
echo $mahasiswa['plot4'] ."</td></tr>";
echo "<tr><td><b>Tahun Liris</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['Year'] ."</td>";
echo "<tr><td><b>Tanggal Liris</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['Released'] ."</td>";
echo "<tr><td><b>Durasi Film</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['Runtime'] ."</td>";
echo "<tr><td><b>Gendre</b></td>";
echo "<td> : </td>";
echo "<td>" .implode(", ", $mahasiswa['Genre']) ."</td>";
echo "<tr><td><b>Director</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['Director'] ."</td>";
echo "<tr><td><b>Penulis</b></td>";
echo "<td> : </td><ul>";
echo "<td><li>".implode("<li> ", $mahasiswa['Writers']) ."</li></td>";
echo "</li></ul>";
echo "<tr><td><b>Pemeran</b></td>";
echo "<td> : </td><ul>";
echo "<td><li>".implode("<li> ", $mahasiswa['Actors']) ."</li></td>";
echo "</li></ul>";
echo "<tr><td><b>Bahasa</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['Language'] ."</td>";
echo "<tr><td><b>Negara</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['Country'] ."</td>";
echo "<tr><td><b>Penghargaan</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['Awards'] ."</td>";
echo "<tr><td><b>Nilai</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['imdbRating'] ."</td>";
echo "<tr><td><b>Vote</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['imdbVotes'] ." Orang</td>";
echo "<tr><td><b>imdbID</b></td>";
echo "<td> : </td>";
echo "<td>" .$mahasiswa['imdbID'] ." Orang</td>";




?>
</table>