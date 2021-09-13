<?php
$a = 5;
$aa = 1;
$b = 10;
$bb = 3;


$beli =5;
echo "bila beli tepung $a kg maka akan dapat bonus $aa kg<br>";
echo "bila beli tepung $b kg maka akan dapat bonus $bb kg<hr>";
if ($beli >= $a && $beli <10) {
    $abeli = $beli+$aa;
    echo "saya beli $beli kg <br> maka dapat $abeli";
}
else if($beli >= $b){
    $bbeli = $beli+$bb;
    echo "saya beli $beli kg <br> maka dapat $bbeli";
}
else{
    echo "Maaf anda tidak dapat bonus";
}

?>