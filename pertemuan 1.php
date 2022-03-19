<?php
class handphone {
    public  $merk, $warna, $spesifikasi, $jenis, $harga;


    public function __construct ($merk, $warna, $spesifikasi, $harga){


        $this-> merk = $merk ;
        $this-> warna = $warna ;
        $this-> spesifikas = $spesifikasi ;
        $this-> harga = $harga ;

    }
    public function getmerk () {
        return "$this->merk";
    }

    }
    $hp1 = new Handphone("Acer", "Merah", "Snapdragon A7 RAM 4GB", 1400000 )

    echo $hp1->getmerk();



?> 