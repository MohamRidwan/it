<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        Data Film <br>
        <b>The Graduate</b><br>

    <img src="spider-verse.jpg" alt="">
    <br>
</center>
    <table>
    <tr>
    <td></td>
    <td></td>
    <td>
        Ben has recently graduated college,with his parent now expecting greate things from him. At his <br>
        "Homecoming"party, Mrs. Roninson, the wife of his fathers business partner, has Ben drive her home, which <br>
        leads to an affair between the two.the affair eventually ends,but comes back to haunt him when he finds <br> 
        himself falling for Elaine,Mrs.Robinsons daughter.</td>
    </tr>    
    <?php
$file = "lt2.json";

// mendapatkan file json
$anggota = file_get_contents($file);

$mahasiswa = json_decode($anggota, true);
foreach ($mahasiswa as $a) {
    echo "Tahun Liris : " .$a['Year']."<br>";
    
    
}
?>
    </table>
</body>
</html>