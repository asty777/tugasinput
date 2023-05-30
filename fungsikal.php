<?php

class kalkulator {
    public $angka1;
    public $angka2;
    
    function __construct($angka1, $angka2) {
        $this->angka1=$angka1;
        $this->angka2=$angka2;
    }

    function Tambah(){
        $hasil = $this->angka1 + $this->angka2;
        return $hasil;
    }

    function Kurang(){
        $hasil = $this->angka1 - $this->angka2;
        return $hasil;
    }

    function Kali(){  
        $hasil = $this->angka1 * $this->angka2;
        return $hasil;
    }

    function Bagi(){
        if($this->angka1 != 0 && $this->angka2 != 0){
            $hasil = $this->angka1 / $this->angka2;
            return $hasil;
        }else{
            return "bilangan tidak bisa dibagi 0 ";
        }
       
    }



}
?>