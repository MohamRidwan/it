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
    <h2>Pengulangan</h2>

    <form method= "POST" action="">
    <table>
    </tr>
    <tr>
        <td>Angka</td>
        <td>:</td>
        <td><input type="text" name="angka" required></td>
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
    $n = $_POST['angka'];
    
    echo "<br> Bilangan Terbesar Ke Terkecil <br>";
    for ($a=$n;$a>=1;$a--){
    
            echo "$a <br>";
        
    }
    echo "<br> Bilangan genap <br>";
    for ($i=1; $i <= $n ; $i++) {
        
        echo $i *2;
        echo "<br>";
    
    }
    echo "<br> segitiga * <br>";
    for ($a=1;$a<=$n;$a++){
        for ($b=1; $b<=$a ; $b++) { 
            echo "*";
        }
        echo "<br>";
        }
        echo "<br> segitiga terbalik * <br>";
        for ($a=$n;$a>=1;$a--){
            for ($b=1; $b<=$a ; $b++) { 
                echo "*";
            }
            echo "<br>";
            }
            echo "<br> Segitiga sama kaki<br>";
            for ($i=1; $i <= $n ; $i++) { 
                # spasi
                for ($s=1; $s <= $n - $i; $s++) { 
                    echo "&nbsp";
                }
                for ($j=1; $j <= $i ; $j++) { 
                    echo "*";
                }
                echo "<br>";
            }
}
    
?>