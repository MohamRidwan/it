<?php

if (isset($_POST["simpan"])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tgl'];
    $jb = $_POST['jb'];
    $laker = $_POST['laker'];
    $sk = $_POST['sk'];
    $bpjs = $_POST['bpjs'];
    $pinjam = $_POST['pinjam'];
    $nabung = $_POST['nabung'];
    $lain = $_POST['lain'];
    
    class penggajihan
    {
         
        
    }
    class gaji extends penggajihan
    {
        public function gaji1($a,$b,$c,$d,$e,$f,$g){
            
            echo"<table>";
            echo "<tr><td>No</td><td>:</td><td>" .$a ."</td></tr>";
            echo "<tr><td>Nama</td><td>:</td><td>" .$b ."</td></tr>";
            echo "<tr><td>Unit</td><td>:</td><td>" .$c ."</td></tr>";
            echo "<tr><td>Tanggal</td><td>:</td><td>" .$d ."</td></tr>";
            echo "<tr><td></td><td></td><td><br>Gaji<br><br></td></tr>";
            echo "<tr><td>Jabatan</td><td>:</td><td>$e</td></tr>";
            if ($e == "Kepala Sekolah") {
                $z=5000000;
                echo "<tr><td>Gaji</td><td>:</td><td>" .$z ."</td></tr>";
            }
            else if ($e == "Guru") {
                $z=3000000;
                echo "<tr><td>Gaji</td><td>:</td><td>" .$z ."</td></tr>";
                
            }
            else if ($e == "Karyawan") {
                $z=3000000;
                echo "<tr><td>Gaji</td><td>:</td><td>" .$z ."</td></tr>";
                
            }
            echo "<tr><td>Lama Kerja</td><td>:</td><td>$f</td></tr>";
            if ($f <= 5 && $f >=0) {
                $z=250000;
                echo "<tr><td>Gaji</td><td>:</td><td>" .$z ."</td></tr>";
            }
            else if ($f <=10 && $f >=6) {
                $z=500000;
                echo "<tr><td>Gaji</td><td>:</td><td>" .$z ."</td></tr>";
                
            }
            else if ($f >= 10 && $f >= 10) {
                $z=3000000;
                echo "<tr><td>Gaji</td><td>:</td><td>" .$z ."</td></tr>";
                
            }

        echo "<tr><td>Status Kerja</td><td>:</td><td>$g</td></tr>";
        echo "</table>";
        }

    // class potongan extends penggajihan 
    // {
    //    public function potong() 
    // }
    
}
}  
$cetak = new gaji;
$cetak->gaji1($no,$nama,$unit,$tgl,$jb,$laker,$sk)
?>