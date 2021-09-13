<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input</title>
</head>
<body>
<h2>swich case</h2>
    <form method= "POST" action="">
    <table>
    <tr>
        <td>Masukan Angka</td>
        <td>:</td>
        <td><input type="text" name="angka" required></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" Value= "kirim"></td>
    </tr>
    </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    switch ($angka){
        case 1:   
        echo "Isi variabel angka adalah satu";
        break;
        case 2:   
            echo "Isi variabel angka adalah dua";
            break;
            case 3:   
                echo "Isi variabel angka adalah tiga";
                break;
                case 4:   
                    echo "Isi variabel angka adalah empat";
                    break;
                    case 5:   
                        echo "Isi variabel angka adalah lima";
                        break;
                        case 6:   
                            echo "Isi variabel angka adalah enam";
                            break;
                            case 7:   
                                echo "Isi variabel angka adalah tujuh";
                                break;
                                case 8:   
                                    echo "Isi variabel angka adalah delapan";
                                    break;
                                    default:
                                    echo "isi variabel tidak ditemukan ";
    }
}
        ?>