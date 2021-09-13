<?php

//class manusia
echo "<h2>Luas Bangun Datar</h2>";
class bangundatar{
    
    //method Bangun Datar
    function persegi($s){
        
        echo "Menghitung Luas Persegi <br>";
        echo "Sisinya = $s <br>";
        $luas=$s*$s;
        echo "Luasnya = $luas <br><hr>";
    }
    
    function segitiga($a,$t){
        echo "Menghitung Luas Segitiga <br>";
        echo "Alasnya = $a <br>";
        echo "Tingginya = $t <br>";
        $luas=($a*$t)/2;
        echo "Luasnya = $luas <br><hr>";
        
        
    }
    function lingkaran($r,$phi){
        echo "Menghitung Luas Lingkaran <br>";
        echo "phi = $phi <br>";
        echo "jari-jari = $r <br>";
        $luas= $phi * $r * $r;
        echo "Luasnya = $luas <br><hr>";
        
    }
    
}

$bentuk = new bangundatar();
echo $bentuk->persegi(10) ."<br>";
echo $bentuk->segitiga(10,5) ."<br>";
echo  $bentuk->lingkaran(10,3.14) ."<br>";
?>