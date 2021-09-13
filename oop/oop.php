<?php
//PHP OOP Part 2  Pengertian Class, Object, Property dan Method
//class manusia
echo "<h2>Sekolah</h2>";
class sekolah{
    //property
    var $kelas = "XII RPL 2";
    var $wc = "WC/Toilet";
    var $musolah = "Tempat beribadah";
    
    //method sekolah
    function kelas($kls){
        // return "dikelas banyak beberapa barang dan banyak nya siswa siswa yang belajar di kelas <br/>";
        return $kls;
    }
    
    function wc($toilet){
        // return "WC adalah tempat buang air kecil maupun besar <br/>";
        return $toilet;
    }
    function musolah($ibadah){
        // return "Musholah bisa juga di sebut masjid kecil,musholah adalah tempat beribadah buat yang beragama islam <br/>";
        return $ibadah;
    }
    
}
//instansiasi class manusia
$sekolah = new sekolah();

//memanggil method tampilkan_nama dari class sekolah
echo $sekolah -> kelas ."<br>";
echo $sekolah->kelas("dikelas banyak beberapa barang dan banyak nya siswa siswa yang belajar di kelas <br/>") ."<br>";

//memanggil method warna_kulit dari class sekolah
echo $sekolah -> wc ."<br>";
echo $sekolah->wc("WC adalah tempat buang air kecil maupun besar <br/>") ."<br>";
// memangil method musolah dari class sekolah
echo $sekolah -> musolah ."<br>";
echo  $sekolah->musolah("Musholah bisa juga di sebut masjid kecil,musholah adalah tempat beribadah buat yang beragama islam <br/>") ."<br>";
?>