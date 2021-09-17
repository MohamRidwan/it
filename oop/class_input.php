<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Input</title>
</head>
<body>
    <table>
        <form action "" method="post">
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><input type="text" name="nim"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="kelas"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="proses" value="Proses"></td>
    </tr>
    </form>
        </table>
    </body>
</html>
<?php

//Kalkulator Sederhana
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    

    class Input{

        //property bagas
        public $x;
        public $y;
        public $a;
        //method
        public function data($aa, $bb, $cc) {
            $this->x = $aa;
            $this->y = $bb;
            $this->a = $cc;
                
        }
    }
        //instanilasi
    $cetak = new Input();
    $cetak->data($nim,$nama,$kelas);

    echo $cetak->x."<br>";
    echo $cetak->y."<br>"; 
    echo $cetak->a;     
    
}

?