
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


// // akses privat
//class manusia
class manusia{
    //menentukan property dengan private
    private $nama = "malas ngoding";    
    
    //method public
    public function tampilkan_nama(){
        return "Nama saya " .$this->nama;
    }
    
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();




// // akses protected

// //class manusia
// class manusia{
//     //menentukan property dengan protected
//     protected $nama = "malas ngoding";    
    
//     //method protected
//     protected function nama(){
//         return "Nama saya " .$this->nama;
//     }
    
//     public function tampilkan_nama(){
//         return $this->tampilkan_nama;
//     }
    
// }

// //instansiasi class manusia
// $manusia = new manusia();

// //memanggil method public tampilkan_nama dari class manusia
// echo $manusia->tampilkan_nama();
?>