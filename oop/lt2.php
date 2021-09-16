<?php

class uang{
    public $total1;
    public $total2;
    function gajihan($jabatan,$pendidikan){
        //    Gaji
        
        echo "<table>";
        echo "<h2>Pendapatan Gaji</h2>";
        if ($jabatan == "Direktur") {
            echo "<tr><td>jabatan</td> ";
            echo "<td>:</td> <td>$jabatan</td></tr>";
            $gj = 3000000;
            echo "<tr><td>Gajih Pokok</td>";
            echo "<td> : </td><td>$gj</td></tr>";
            if ($pendidikan == "SMP") {
                echo "<tr>";
                echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=500000;
                echo "<tr>";
                echo "<td>Tunjangan</td> <td>:</td> <td>$tj</td></tr>";
            }
            if ($pendidikan == "SMA") {
                echo "<tr>" ;
                echo "<td>Pe;ndidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=1000000;
                echo "<tr>"; 
                echo "<td>Tunjangan</td> <td>:</td> <td>$tj</td></tr>";
            }
            if ($pendidikan == "S1") {
                echo "<tr>"; 
                echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=2000000;
                echo "<tr>"; 
                echo "<td>Tunjangan</td> <td>:</td> <td>$tj</td></tr>";
            }
            $this->total1 = $gj + $tj;
            echo "<tr>"; 
            echo "<td>Total Gaji</td> <td>:</td> <td>" .$this->total1 ."</td></tr><hr>"; 
        }
        else if ($jabatan == "Manager") {
            echo "<tr>"; 
            echo "<td>jabatan</td> <td>:</td> <td>$jabatan</td></tr>";
            $gj = 5000000;
            echo "<tr>"; 
            echo "<td>Gaji Pokok</td> <td>:</td> <td>$gj</td></tr>";
            if ($pendidikan == "SMP") {
                echo "<tr>"; 
                echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=500000;
                echo "<tr>"; 
                echo "<td>Tunjangan</td> <td>:</td> <td>$tj</td></tr>";
            }
            if ($pendidikan == "SMA") {
                echo "<tr>"; 
                echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=1000000;
                echo "<tr>"; 
                echo "<td>Tunjangan</td> <td>:</td> <td>$tj</td></tr>";
            }
            if ($pendidikan == "S1") {
                echo "<tr>"; 
                echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=2000000;
                echo "<tr>"; 
                echo "<td>Tunjangan</td> <td>:</td> <td>$tj</td></tr>";
            }
            $this->total1 = $gj + $tj;
            echo "<tr>"; 
            echo "<td>Total Gaji</td> <td>:</td> <td>" .$this->total1 ."</td></tr><hr>"; 
        }
        else if ($jabatan == "Direktur") {
            echo "<tr>"; 
            echo "<td>jabatan</td> <td>:</td> <td>$jabatan</td></tr>";
            $gj = 10000000;
            echo "<tr>"; 
            echo "<td>Gaji Pokok</td> <td>:</td> <td>$gj</td></tr>";
            if ($pendidikan == "SMP") {
                echo "<tr>"; 
                echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=500000;
                echo "Tunjangan : $tj<br>";
            }
            if ($pendidikan == "SMA") {
                echo "<tr>"; 
                echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=1000000;
                echo "<tr>"; 
                echo "<td>Tunjangan</td> <td>:</td> <td>$tj</td></tr>";
            }
            
            if ($pendidikan == "S1") {
                echo "<tr>"; 
                echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td></tr>";
                $tj=2000000;
                echo "<tr>"; 
                echo "<td>Tunjangan</td> <td>:</td> <td>$tj</td></tr>";
            }
            $this->total1 = $gj + $tj;
            echo "<tr>"; 
            echo "<td>Total Gaji</td> <td>:</td> <td>" .$this->total1 ."</td></tr><hr>"; 
        }
        // Pengeluaran
        echo "</table>";
    }
    function pengeluaran($listrik,$kontrakan,$kendaraan){
        echo "<h2> Pengeluaran </h2>";
        echo "<table>";
        echo "<tr>"; 
        echo "<td>bayar Listrik</td> <td>:</td> <td>$listrik</td></tr>";
        echo "<tr>"; 
        echo "<td>bayar Kontrakan</td> <td>:</td> <td>$kontrakan</td></tr>";
        echo "<tr>"; 
        echo "<td>Cicilan Kendaraan</td> <td>:</td> <td>$kendaraan</td></tr>";
        $this->total2 =$listrik+$kontrakan+$kendaraan;
        echo "<tr>"; 
        echo "<td>Total Pengeluaran</td> <td>:</td><td>" . $this->total2 ."</td></tr><hr>";
        echo "</table>";
    }
    // sisa
    public function sisa(){
        echo "<table>";
        $sisa = $this->total1 - $this->total2;
        echo "<tr>"; 
        echo "<td><b>sisa</td> <td>:</td> <td>$sisa </b></td></tr>";
        echo "</table>";
    }
    }
    $nilai = new uang();
    echo $nilai->gajihan("Manager","SMP") ."<br>";
    echo $nilai->pengeluaran(200000,1000000,600000) ."<br>";
    echo $nilai->sisa();
    // jabatan dan pendidikan
    ?>