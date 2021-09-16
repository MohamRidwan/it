<?php 
//www.malasngoding.com
// class parent
class manusia{
 
	// property class manusia
    
    // method pada class manusia
    protected $nama= "M Ridwan";	
	protected function berinama(){
		echo "saya adalah";
	}
	
}
 
// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{
 
	// property class teman
	
 
 	// method pada class teman
	public function pendidikan($skl){
		echo $this->berinama()." : " .$this->nama ."<br>";
		echo "pendidikan saya baru";
        echo $skl;
	}
}
 
// instansiasi class teman
$malasngoding = new teman;
 
// method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia

$malasngoding->pendidikan(" Smp ");
 
// menampilkan isi property

?>