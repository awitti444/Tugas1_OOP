<?php
class Sepatu{
    public $warna;
    public $merk;
    public $ukuran;

    public function setWarna($warna) {
        $this->warna=$warna;
    }
    public function setMerk($merk) {
        $this->merk=$merk;
    }
    public function setUkuran($ukuran) {
        $this->ukuran=$ukuran;
    }
    public function getCetak() {
        echo "Nama Warna: ".$this->warna;
        echo "<br>";
        echo "Nama Merk: ".$this->merk;
        echo "<br>";
        echo "Nama Ukuran: ".$this->ukuran;
        echo "<br> =========================== <br>";
    }

     // destructor
     public function __destruct()
     {
         echo "selesai" ;
     }
 
     // constructor
     public function __construct()
     {
         echo "mulai! <br>";
     }
 
}

$sepatu = new Sepatu();
$sepatu->setWarna("putih");
$sepatu->setMerk("sneakers");
$sepatu->setUkuran("38");
$sepatu->getCetak();

