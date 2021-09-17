<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="x">
        <select name="mtk" Value="" required>
        <option value="+" >+</option>
        <option value="-">-</option>
        <option value="*">x</option>
        <option value="/">/</option>
        </select>
        <input type="text" name="y">
        <input type="submit" name="simpan" Value= "kirim">
    </form>
</body>
</html>
 -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
        <input type="text" name="x"> &nbsp;
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kali">x</option>
            <option value="kurang">-</option>
            <option value="bagi">/</option>
    </select> &nbsp;
        <input type="text" name="y"> &nbsp;
        <label>=</label> &nbsp;
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
<?php
// class Kalkulator {
//   public $x;
//   public $y;
//     public function Tambah($a, $b){
//     $this->x = $a;
//     $this->y = $b;
//     $hasil = $this->x + $this->y;
//     return $hasil;
//   }
//     public function Kali($a, $b){
//     $this->x = $a;
//     $this->y = $b;
//     $hasil = $this->x * $this->y;
//     return $hasil;
//   }
//     public function Kurang($a, $b){
//     $this->x = $a;
//     $this->y = $b;
//     $hasil = $this->x - $this->y;
//     return $hasil;
//   }
//     public function Bagi($a, $b){
//     $this->x = $a;
//     $this->y = $b;
//     $hasil = $this->x / $this->y;
//     return $hasil;
//   }

// public function Tampilkan_Kalkulator(){}

// }

// $cetak = new Kalkulator();
// $cetak->Tampilkan_Kalkulator();
// if ($_POST) {
//   $x = $_POST['x'];
//   $y = $_POST['y'];
//   if ($_POST['operasi'] == "tambah") {
//     echo "Hasil ".$x." + ".$y." = ".$cetak->Tambah($x, $y)."<br /><br />";
//   } elseif ($_POST['operasi'] == "kali") {
//     echo "Hasil ".$x." x ".$y." = ".$cetak->Kali($x, $y)."<br /><br />";
//   } elseif ($_POST['operasi'] == "kurang") {
//     echo "Hasil ".$x." - ".$y." = ".$cetak->Kurang($x, $y)."<br /><br />";
//   } elseif ($_POST['operasi'] == "bagi") {
//     echo "Hasil ".$x." / ".$y." = ".$cetak->Bagi($x, $y)."<br /><br />";
//   }
// } 
// if(isset($_POST['simpan'])){
//     $x = $_POST['x'];
//     $y = $_POST['y'];
//     $mtk = $_POST['mtk'];
    
//     class kalkulator{
//         public $a;
//         public $b;
//         public $c;

//         function hasil($aa,$bb,$cc){
//             if ($cc == "+") {
//                 # code...
//                 $has = $aa + $bb;
//                 echo "$aa "; 
//                 echo "$cc";
//                 echo " $bb = $has";
//             }
//             else if($cc == "-") {
//                 # code...
//                 $has = $aa - $bb;
//                 echo "$aa "; 
//                 echo "$cc";
//                 echo " $bb = $has";
//             }
//             else if($cc == "*") {
//                 # code...
//                 $has = $aa * $bb;
//                 echo "$aa "; 
//                 echo "$cc";
//                 echo " $bb = $has";
//             }
//             else if($cc == "/") {
//                 # code...
//                 $has = $aa / $bb;
//                 echo "$aa "; 
//                 echo "$cc";
//                 echo " $bb = $has";
//             }
            
//         }

//     }
//     $cetak = new kalkulator();
//     $cetak->hasil($x,$y,$mtk);
    
// }
?>