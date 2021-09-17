<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <form action="" method="post">
            <tr>
                
                <td><input type="text" name="s" id=""></td>
            <td>
                <select class="opt" name="mtk">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="X">x</option>
				<option value="/">/</option>
			</select></td>
                <td><input type="text" name="d" id=""></td>
           
                
                <td><input type="submit" name= "hitung" value="Hitung"></td>
            </tr>
        </form>
    </table>
</body>
</html>

<?php

if (isset($_POST["hitung"])) {
   $s = $_POST['s'];
   $d = $_POST['d'];
    $mtk = $_POST['mtk'];
    
   class Matematika
   {
       public $x;
       public $y;
       public $z;
      
      

       public function tambah($x,$y,$z)
       {
           $this->x = $x;
           $this->y = $y;
           $this->z = $z;
           

           if ($z == "+") {
               
            $hasil = $x + $y;
            echo "Hasil ";
            echo $x;
            echo " ";
            echo $z;
            echo " ";
            echo $y;
            echo " = ";
            echo $hasil;
           }
    
       }
       public function kurang($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        if ($z == "-") {
               
            $hasil = $x - $y;
            echo "Hasil ";
            echo $x;
            echo " ";
            echo $z;
            echo " ";
            echo $y;
            echo " = ";
            echo $hasil;
           }
       }
       public function kali($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        if ($z == "X") {
               
            $hasil = $x * $y;
            echo "Hasil ";
            echo $x;
            echo " ";
            echo $z;
            echo " ";
            echo $y;
            echo " = ";
            echo $hasil;
           }
           
       }
       public function bagi($x,$y,$z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        
        if ($z == "/") {
               
            $hasil = $x / $y;
            echo "Hasil ";
            echo $x;
            echo " ";
            echo $z;
            echo " ";
            echo $y;
            echo " = ";
            echo $hasil;
           }
       }
   }

   $data = new Matematika();
   $data->tambah($s,$d,$mtk);
   $data->kurang($s,$d,$mtk);
   $data->kali($s,$d,$mtk);
   $data->bagi($s,$d,$mtk);

   
   
   
}

?>