<?php
$uang = 100000;
$minum = 15000;
$sosis = 25000;
$sedekah = 10/100;
$rezeki = 50/100;
$jminum = $uang-$minum;
$jajan = $uang-($minum+$sosis);
$pahala = $jajan*$sedekah;
$sisaS = $jajan-$pahala;
echo "Uang ucup = $uang <hr>";
echo "Jajan minum = $minum <br>";
echo "Sisa uang Ucup jajan minum = $jminum <hr>";
echo "Jajan sosis bakar = $sosis<br>";
echo "Sisa uang ucup jajan sosis bakar +minum = $jajan<hr>";
echo "sedekah ke musafir 10% dari $jajan yaitu sebesar $pahala<br>";
echo "Sisa uang ucup = $sisaS<hr>";
?>