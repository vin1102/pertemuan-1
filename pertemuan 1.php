<?php
class handphone {
    public  $merk, $warna, $spesifikasi, $jenis, $harga;


    public function __construct ($merk, $warna, $spesifikasi, $harga){


        $this-> merk = $merk ;
        $this-> warna = $warna ;
        $this-> spesifikas = $spesifikasi ;
        $this-> harga = $harga ;
    }
    public function getlabel () {
        return "$this->warna, $this->spesifikasi";
    }
    public function gettipe () {
        $str = "{$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;

    }

}

class  keyboard {
    public  $merk, $warna, $jenis, $dimesi, $harga;

    public function __construct ($merk, $warna, $jenis, $dimesi, $harga){

        $this-> merk = $merk ;
        $this-> warna = $warna ;
        $this-> jenis = $jenis ;
        $this-> dimensi = $dimesi ;
        $this-> harga = $harga ;
    }
    public function getlabel () {
        return "$this->warna, $this->jenis, $this->jenis";
    }
    public function gettipe () {
        $str = "{$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class Elektronik extends handphone {

    public function getInfohandphone() {
        $str = "Elektronik    = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakInfohandphone {

    public function cetak(handphone $handphone){
        $str = "{$handphone->merk} {$handphone->getlabel()} (Rp. {$handphone->harga})";
        return $str;
    }

 }
$hp1 = new handphone("Acer", "Merah", "Snapfragon", 3500000);

echo $hp1->getInfohandphone();
echo "<br>";






?> 