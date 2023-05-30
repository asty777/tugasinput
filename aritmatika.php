<?php

class aritmatika{
    private $bilangan1;
    protected $bilangan2;

    public function setbilangan($bilangan1, $bilangan2){
        $this->bilangan1 = $bilangan1;
        $this->bilangan2 = $bilangan2;
    }

    public function Tambah(){
       $hasil = $this->bilangan1 + $this->bilangan2;
        return $hasil;
    }

    public function Kurang(){
       $hasil = $this->bilangan1 - $this->bilangan2;
        return $hasil;
    }

    public function Kali(){
       $hasil = $this->bilangan1 * $this->bilangan2;
        return $hasil;
    }

    public function Bagi(){
        if($this->bilangan1 != 0 && $this->bilangan2 != 0){
            $hasil = $this->bilangan1 / $this->bilangan2;
            return $hasil;
        }else{
            return "bilangan tidak bisa dibagi 0 ";
        }
       
    }
}

$aritmatika1 = new aritmatika ;
$aritmatika1->setbilangan(10,3);
$aritmatika1->Tambah();
echo "Pertambahan : " .$aritmatika1->Tambah()."<br>";

$aritmatika1->setbilangan(10,2);
$aritmatika1->Kali();
echo "Perkalian : " .$aritmatika1->Kali()."<br>";

$aritmatika1->setbilangan(12,4);
$aritmatika1->Kurang();
echo "Perkurangan : " .$aritmatika1->Kurang()."<br>";

$aritmatika1->setbilangan(20,4);
$aritmatika1->Bagi();
echo "Pembagian : " .$aritmatika1->Bagi()."<br>";




?>