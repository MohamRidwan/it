<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Lingkaran</title>
</head>
<body>
<center>

<a href="lat1.php"><button>Latihan 1</button></a> 
<a href="lat2.php"><button>Latihan 2</button></a> 
<a href="lat3.php"><button>Latihan 3</button></a> 
</center>

<fieldset>
        <legend>Menghitung Lingkaran  </legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th> Jari-jari Lingkaran : </th>
                    <td><input type="number" name="jari" id=""></td>
                </tr>
               
                <tr>
                    <th></th>
                    <td><button type="submit" name="save">Simpan</button>
                </tr>
            </table>
        </form>

<?php
       if (isset($_POST['save'])) {
            $a = $_POST['jari'];
//optional parameter/default parameter
function luasLingkaran($jari , $phi=3.14)
{
    $luas = $phi * $jari * $jari;
    return $luas;
}
function kelilingLingkaran($jari , $phi=3.14)
{
    $keliling = 2 * ($phi * $jari);
    return $keliling;
}
?>
jari jari = <?php echo $a; ?> <br>
Luas Lingkaran = <?php echo luaslingkaran($a); ?> <br>

Keliling Lingkaran = <?php echo kelilinglingkaran($a); ?>
<?php } ?>
</fieldset>
</body>
</html>