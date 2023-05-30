<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="kalkulator">
        <h2 class="judul">kalkulator</h2>
        <form method="post" action="kalkulator.php">
            <input type="number" name="bil1" class="bil" placeholder="input angka pertama">
            <input type="number" name="bil2" class="bil" placeholder="input angka kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol" >
            
        </form>
       
        <?php
        if(isset($_POST['hitung'])){
            include "fungsikal.php";
            $angka1 = $_POST['bil1'];
            $angka2 = $_POST['bil2'];
            $operasi = $_POST['operasi'];
            $hasil = new kalkulator($angka1, $angka2);
            Switch($operasi){
                case'tambah':
                    echo "Hasil dari : ".$angka1."+".$angka2." = ".$hasil->tambah()."<br>";
                    break;
                case'kurang':
                    echo "Hasil dari : ".$angka1."-".$angka2." = ".$hasil->kurang()."<br>";
                    break;
                case'kali':
                    echo "Hasil dari : ".$angka1."*".$angka2." = ".$hasil->kali()."<br>";
                     break;
                case'bagi':
                    echo "Hasil dari : ".$angka1."/".$angka2." = ".$hasil->bagi()."<br>";
                    break;
                default:
                    break;
    

            }
        }
        
        ?>
          
    </div>
</body>
</html>