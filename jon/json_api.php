<?php

$url ="https://api.kawalcorona.com";
// persiapkan curl / init curl  
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//return thr output string  
$dataCovid = curl_exec($ch);
// tutup curl
// curl_close($ch)MENAMPILKAN HASIL CUL
// ECHO $OUTPUT
?>

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
    <h1><i>Data Covid-19</i></h1>
    <table border="1">
    <tr>
<th>Negara</th>
<th>Positif</th>
<th>sembuh</th>
<th>Meninggal</th>
    </tr>
    <?php
$data = json_decode($dataCovid);
foreach ($data as $covid) {
    
    ?>
    <tr>
        <td><?php echo $covid->attributes->Country_Region;?></td>
        <td><?php echo $covid->attributes->Confirmed;?></td>
        <td><?php echo $covid->attributes->Recovered;?></td>
        <td><?php echo $covid->attributes->Deaths;?></td>
    </tr>
    <?php
}
?>
    </table>
    </center>
</body>
</html>