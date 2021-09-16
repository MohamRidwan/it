<?php


class manusia{
 
    function __construct($nama,$jk,$kls){
        echo "<table><tr>";
        echo "<td>Nama</td> <td>:</td> <td>$nama</td>";
        echo "</tr>";
        echo "<tr><td>Jenis Kelamin</td> <td>:</td> <td>$jk</td>";
        echo "</tr>";
        echo "<tr><td>kelas</td> <td>:</td> <td>$kls</td></tr></table>";
        echo "</tr></table><hr>";
    }

}   
$manusia = new manusia("cecep","Laki-laki","XII RPL 1");
$manusia = new manusia(" Ridwan","Laki-laki","XII RPL 2");
$manusia = new manusia("Dinda","Perempuan","XII RPL 3");
?>