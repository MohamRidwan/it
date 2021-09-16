
<!-- akses public -->
<?php

// //class manusia
// class manusia{
//     //prop
//     public $nama;
//     public $warna;
    
//     //method manusia
//     function tampilkan_nama(){
//         return "Nama saya malasngoding <br/>";
//     }
    
// }
// //instansiasi class manusia
// $manusia = new manusia();

// //memanggil method tampilkan_nama dari class manusia
// echo $manusia->tampilkan_nama();


// akses privat
// //class manusia
// class manusia{
//     //menentukan property dengan private
//     private $nama = "malas ngoding";    
    
//     //method public
//     public function tampilkan_nama(){
//         return "Nama saya " .$this->nama;
//     }
    
    
// }
// //instansiasi class manusia
// $manusia = new manusia();
 
// //memanggil method public tampilkan_nama dari class manusia
// echo $manusia->tampilkan_nama();




// // akses protected

// //class manusia
// class manusia{
//     //menentukan property dengan protected
//     protected $nama = "malas ngoding";    
    
//     //method protected
//     public function nama(){
//         return "Nama saya " .$this->nama;
//     }
    
// }

// //instansiasi class manusia
// $manusia = new manusia();

// //memanggil method public tampilkan_nama dari class manusia
// echo $manusia->nama();



// akses constuct dan destruct

//www.malasngoding.com
//class manusia
class manusia{
    //property

    
    //method construct di jalankan pertama kali
    function __construct(){
        echo "Assalamualaikum Wr Wb <br/>";
    }
    
    //method destruct di jalankan terakhir
    function __destruct(){
        echo "wasalamualaikum wr wb <br/>";
    }
    
    //method manusia
    function tampilkan_nama(){
        return "<br><br>Hadirin yang saya hormati, alhamdulillah, puji syukur patut kita panjatkan karena sampai detik ini masih dikaruniai hidup dan kesehatan.
        Bapak, ibu, dan saudara sekalian, sudah hampir setahun wabah Covid-19 melanda dunia.<br>
         Tahun 2020 hampir berakhir, tetapi pandemi belum juga reda.<br>
         Di tengah situasi ini, mari kita sama-sama kembali belajar untuk sabar.<br> 
        Sabar itu penting. Terutama di masa-masa sekarang. Orang sudah banyak yang jenuh,<br>
         akhirnya memilih liburan ke luar kota. Bosan makan di rumah, akhirnya ke rumah makan.<br>
         Lelah pakai masker, akhirnya masker ditaruh di dagu. Bapak, ibu, dan saudara sekalian,<br>
         firman Allah SWT, dalam Q.S. Al Baqarah ayat 153 mengatakan, “Hai orang-orang yang beriman,<br>
         jadikanlah shalat dan sabar sebagai pelindungmu, sesungguhnya Allah SWT senantiasa bersama orang-orang yang sabar.<br>
        ” Melalui ayat itu, Allah meningatkan kita untuk sabar. Sabar dan menahan diri.<br>
         Pelindung orang beriman adalah kesabaran. Liburan atau jalan-jalan bisa kita lakukan setelah pegebluk hilang.<br>
         Kalau semua orang keluar rumah, main-man, tidak pakai masker dengan benar,virusnya malah tambah senang.<br>
         Toh tempat wisata dan rumah makan akan tetap ada, meski didatangi bulan-bulan atau tahun depan. Kita harus sabar menunggu.<br>
         Semoga vaksinnya segera ditemukan. Kunci dari semua ini adalah kesabaran.<br>
         Demikian sedikit yang dapat saya sampaikan pada ceramah sore ini.<br>
         Mohon maaf bila ada salah kata atau ucapan yang kurang berkenan.<br><br><br>";
    }
    
}
//instansiasi class manusia

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>