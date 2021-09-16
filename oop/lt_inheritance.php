<?php
echo "<center><h2> Bangun Datar </h2></center><hr>";
class bangun{
    
    protected $kotak="persegi";
    protected $persegip="persegi panjang";
    protected $segitiga="segitiga";
    protected $lingkaran="lingkaran";
   

}

class persegi extends bangun{
    public function persegi1($sisi){
        echo $this->kotak ."<br>";
        echo "Sisi x Sisi = luas<br>";
        $luas=$sisi*$sisi;
        echo "Luas Persegi yang Memiliki <br>Sisi : $sisi <br>adalah :$luas<hr>";
    }
}
class persegipanjang extends bangun{
    public function persegip($p,$l){
        echo $this->persegip ."<br>";
        echo "Panjang x Lebar = luas<br>";
        $luas=$p*$l;
        echo "Luas Persegi panjang yang Memiliki<br> Panjang : $p <br> Lebar : $l <br>adalah : $luas <hr>";
    }
}
class segitiga extends bangun{
    public function segitiga1($a,$t){
        echo $this->segitiga ."<br>";
        echo "(Alas x Tinggi)/2 = luas<br>";
        $luas=($a*$t)/2;
        echo "Luas segitiga yang Memiliki<br> Alas : $a <br> Tinggi : $t <br> adalah : $luas <hr>";
    }
}
class lingkaran extends bangun{
    public function lingkaran1($r){
        echo $this->lingkaran ."<br>";
        echo "3.14 x r x r = luas<br>";
        $luas=3.14 *$r*$r;
        echo "Luas lingkaran yang Memiliki <br> Rusuk : $r <br> adalah : $luas<hr>";
    }
}

$tampil = new persegi;
$tampil->persegi1(5);
$tampil = new persegipanjang;
$tampil->persegip(5,10);
$tampil = new segitiga;
$tampil->segitiga1(5,10);
$tampil = new lingkaran;
$tampil->lingkaran1(10);
?>