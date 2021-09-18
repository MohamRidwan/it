<?php
if(isset($_POST['simpan'])){
    $no = $_POST['no'];
     
    ?>
    <form action="" method="post">

        <?php
    if ($no == 1) {
        ?>
        <center>
            <h3>Masukan Nilai Sisi Persegi</h3>
            <input type="text" placeholder="Masukan Nilai Sisi"> 
            <input type="submit" name="kirim" Value= "kirim">  
        </center>
        <?php
    }
    ?>
        <?php
    else if($no == 2) {
        ?>
        <center>
            <h3>Masukan Nilai Panjang Dan Lebar Persegi panjang</h3>
            <input type="text" placeholder="Masukan Nilai Sisi"> 
            <input type="text" placeholder="Masukan Nilai Sisi"> 
            <input type="submit" name="kirim" Value= "kirim">  
        </center>
        <?php
    }
    ?>
    </form>
    <?php
}
?>
<?php
// echo "<center><h2> Bangun Datar </h2></center><hr>";
// class bangun{
    
//     protected $kotak="<b>persegi</b>";
//     protected $persegip="<b>persegi panjang</b>";
//     protected $segitiga="<b>segitiga</b>";
//     protected $lingkaran="<b>lingkaran</b>";
   

// }

// class persegi extends bangun{
//     public function persegi1($sisi){
//         echo $this->kotak ."<br><br>";
//         $luas=$sisi*$sisi;
//         $keliling=$sisi*4;
//         echo "Sisi x Sisi = luas<br>";
//         echo "Luas Persegi yang Memiliki <br>Sisi : $sisi <br>adalah :$luas<br><br>";
//         echo "Sisi x 4 = keliling<br>";
//         echo "Keliling Persegi yang Memiliki <br>Sisi : $sisi <br>adalah :$keliling<hr>";
//     }
// }
// class persegipanjang extends bangun{
//     public function persegip($p,$l){
//         echo $this->persegip ."<br><br>";
//         $luas=$p*$l;
//         $keliling=2*($p+$l);
//         echo "Panjang x Lebar = luas<br>";
//         echo "Luas Persegi panjang yang Memiliki<br> Panjang : $p <br> Lebar : $l <br>adalah : $luas <br><br>";
//         echo "2x(Panjang + Lebar) = keliling<br>";
//         echo "Keliling Persegi panjang yang Memiliki<br> Panjang : $p <br> Lebar : $l <br>adalah : $keliling <hr>";
//     }
// }
// class segitiga extends bangun{
//     public function segitiga1($a,$t){
//         echo $this->segitiga ."<br><br>";
//         $luas=($a*$t)/2;
//         $keliling=$a*3;
//         echo "(Alas x Tinggi)/2 = luas<br>";
//         echo "luas segitiga yang Memiliki<br> Alas : $a <br> Tinggi : $t <br> adalah : $luas <br><br>";
//         echo "Alas x 3 = luas<br>";
//         echo "Keliling segitiga yang Memiliki<br> Alas : $a <br> Tinggi : $t <br> adalah : $keliling <hr>";
//     }
// }
// class lingkaran extends bangun{
//     public function lingkaran1($r){
//         echo $this->lingkaran ."<br><br>    ";
//         $luas=3.14 *$r*$r;
//         $keliling=2 * 3.14 * $r;
//         echo "3.14 x rusuk x rusuk = luas<br>";
//         echo "Luas lingkaran yang Memiliki <br> Rusuk : $r <br> adalah : $luas<br><br>";
//         echo "2 x 3.14 x rusuk = luas<br>";
//         echo "Keliling lingkaran yang Memiliki <br> Rusuk : $r <br> adalah : $keliling<hr>";
//     }
// }

// $tampil = new persegi;
// $tampil->persegi1(5);
// $tampil = new persegipanjang;
// $tampil->persegip(5,10);
// $tampil = new segitiga;
// $tampil->segitiga1(5,10);
// $tampil = new lingkaran;
// $tampil->lingkaran1(10);
?>