<center>
<?php
$mie = 10000;
$nasi = 15000;
$ayam = 20000;
// makan
$air = 8000;
$jus = 10000;
$kopi = 12000;
// minuman
// kotretan
$pesber = 5;
$pesanan = "minuman";
$napes = "Jus";

if ($pesanan == "makanan") {
    if ($napes == "Ayam Goreng") {
        echo "++++ Restoran Colak Colek ++++<br>";
        echo "=========================<br>";
        echo "Jenis Pesanan : $pesanan<br>";
        echo "Nama amakanan : $napes <br>";
        echo "Jumlah        :$pesber<br>";
        $total =$ayam * $pesber;
        if ($total >= 50000) {
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: $diskon<br>";
            $jumlah = $total-$diskon;
            echo "total bayar :$jumlah<br>";
            }else{
                echo "total : $total<br>";
                $diskon = 20/100*$total; 
                echo "diskon 20%: Tidak Ada <br>";
                $jumlah = $total;
            echo "total bayar :$jumlah<br>";
        }
        echo "=======================<br>";
        echo "======= Terimakasih ======";
    }
    else if ($napes == "Nasi Goreng") {
        echo "+++ Restoran Colak Colek +++<br>";
        echo "=======================<br>";
        echo "Jenis Pesanan : $pesanan<br>";
        echo "Nama amakanan : $napes <br>";
        echo "Jumlah        :$pesber<br>";
        $total =$nasi * $pesber;
        if ($total >= 50000) {
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: $diskon<br>";
            $jumlah = $total-$diskon;
            echo "total bayar :$jumlah<br>";
        }else{
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: Tidak Ada <br>";
            $jumlah = $total;
            echo "total bayar :$jumlah<br>";
        }
        echo "=======================<br>";
        echo "======= Terimakasih ======";
    }
    else if ($napes == "Mie Goreng") {
        echo "+++ Restoran Colak Colek +++<br>";
        echo "=======================<br>";
        echo "Jenis Pesanan : $pesanan<br>";
        echo "Nama amakanan : $napes <br>";
        echo "Jumlah        :$pesber<br>";
        $total =$mie * $pesber;
            if ($total >= 50000) {
                echo "total : $total<br>";
                $diskon = 20/100*$total; 
            echo "diskon 20%: $diskon<br>";
            $jumlah = $total-$diskon;
            echo "total bayar :$jumlah<br>";
        }else{
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: Tidak Ada <br>";
            $jumlah = $total;
            echo "total bayar :$jumlah<br>";
        }
        echo "=======================<br>";
        echo "======= Terimakasih ======";
    }
    else {
        echo "maaf menu yang anda pilih tidak ada di daftar menu";
    }
}
else if($pesanan == "minuman"){
    if ($napes == "Air Mineral") {
        echo "+++ Restoran Colak Colek +++<br>";
        echo "=======================<br>";
        echo "Jenis Pesanan : $pesanan<br>";
        echo "Nama amakanan : $napes <br>";
        echo "Jumlah        :$pesber<br>";
        $total =$air * $pesber;
        if ($total >= 50000) {
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: $diskon<br>";
            $jumlah = $total-$diskon;
            echo "total bayar :$jumlah<br>";
        }else{
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: Tidak Ada <br>";
            $jumlah = $total;
            echo "total bayar :$jumlah<br>";
            }
            echo "=======================<br>";
            echo "======= Terimakasih ======";
        }
        else if ($napes == "Jus") {
            echo "+++ Restoran Colak Colek +++<br>";
            echo "=======================<br>";
            echo "Jenis Pesanan : $pesanan<br>";
        echo "Nama amakanan : $napes <br>";
        echo "Jumlah        :$pesber<br>";
        $total =$jus * $pesber;
        if ($total >= 50000) {
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: $diskon<br>";
            $jumlah = $total-$diskon;
            echo "total bayar :$jumlah<br>";
        }else{
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: Tidak Ada <br>";
            $jumlah = $total;
            echo "total bayar :$jumlah<br>";
        }
        echo "=======================<br>";
        echo "======= Terimakasih ======";
    }
    elseif ($napes == "Kopi") {
        echo "+++ Restoran Colak Colek +++<br>";
        echo "=======================<br>";
        echo "Jenis Pesanan : $pesanan<br>";
        echo "Nama amakanan : $napes <br>";
        echo "Jumlah        :$pesber<br>";
        $total =$kopi * $pesber;
        if ($total >= 50000) {
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: $diskon<br>";
            $jumlah = $total-$diskon;
            echo "total bayar :$jumlah<br>";
        }else{
            echo "total : $total<br>";
            $diskon = 20/100*$total; 
            echo "diskon 20%: Tidak Ada <br>";
            $jumlah = $total;
            echo "total bayar :$jumlah<br>";
        }
        echo "=======================<br>";
        echo "======= Terimakasih ======";
    }
    else{
        echo "maaf menu yang anda pilih tidak ada di daftar menu";
    }
}
else{
    echo "maaf menu yang anda pilih tidak ada di daftar menu";
}

?>
</center>