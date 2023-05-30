<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <h2>Masukkan Biodata anda</h2>
    <form method="post" action="">
        <!-- <label for="">Masukkan Biodata anda</label><br> -->
        <label for="nama">Nama :</label><br>
        <input type="text" name="txnama" id="nama"><br>
        <label for="rombel">Rombel :</label><br>
        <input type="text" name="txrombel" id="rombel"><br>
        <label for="rayon">Rayon :</label><br>
        <input type="text" name="txrayon" id="rayon"><br><br>
        <input type="submit" value="simpan" name="btsimpan">
    </form>
</body>
</html>

<?php
    class biodata{
        public $data;
     
        public function Data($data){
            $this->data = $data;
            if ($this->data !="") {
                return $data;
            }else{
                return "Data butuh diisi!";
            }
        }
    }

    $data1 = new biodata();
    if (isset($_POST['btsimpan'])) { 
        echo "<br>";
        echo "Nama : ".$data1->Data($_POST['txnama'])."<br>";
        echo "Rombel : ".$data1->Data($_POST['txrombel'])."<br>";
        echo "Rayon : ".$data1->Data($_POST['txrayon'])."<br>";
        
    }

?>