<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pengulangan</h2>

    <form method= "POST" action="">
    <table>
    <tr>
        <td>Angka</td>
        <td>:</td>
        <td><input type="text" name="angka" required></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" Value= "kirim"></td>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    

    for ($a=$angka;$a>=1;$a--){
    
            echo "$a <br>";
        
    }
}
    
?>