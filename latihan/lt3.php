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
    <h2></h2>
    <form method= "POST" action="">
    <table>
    <tr>
    <td></td><td></td>
    <td>
    1.Deret Bilangan Ganjil</td>
    </tr>
    <tr>
    <td></td><td></td>
    <td>
    2.Segitiga sama kaki terbalik</td>
    </tr>
    <tr>
    <td></td><td></td>
    <td>
    3.Deret Bilangan Kelipatan 3</td>
    </tr>
    <tr>
        <td>Pilih</td>
        <td>:</td>
        <td><input type="text" name="no" required></td>
    </tr>
    <tr>
        <td>angka</td>
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

</center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    $n = $_POST['angka'];

echo "<center>";
switch ($no) {
    case '1':
        echo "Deret Bilangan Ganjil<br>";
            for ($i=1; $i <= $n ; $i+=2) {
                echo "<b>$i,</b>";
            
            }
        break;
        case '2':
        echo "Segitiga Sama Kaki Terbalik <br><br>";
        for ($i=$n; $i >= 1 ; $i--) { 
            # spasi
            for ($s=$n; $s >= $i - $i; $s--) { 
                echo "&nbsp";
            }
            for ($j=$i; $j >= 1 ; $j--) { 
                echo "*";
            }
            echo "<br>";
        }
        break;
        case '3':
            echo "Deret Bilangan Kelipatan 3<br>";
            for ($i=3; $i <= $n ; $i+=3) {
                echo "<b>$i,</b>";
            
            }
            break;
    default:
        # code...
        break;
}
echo "</center>";
}
?>