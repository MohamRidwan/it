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

        <a href="lat1.php"><button>Latihan 1</button></a> 
        <a href="lat2.php"><button>Latihan 2</button></a> 
        <a href="lat3.php"><button>Latihan 3</button></a> 
        <br><br><br>
        <br>
    </body>
    </html>
    <?php

function hitungUmur($nama,$thn_lahir,$thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return "nama saya ".$nama ." dan umur saya ".$umur;
}


echo hitungUmur("Mohammad Ridwan",2003,2021);
?>
</center>