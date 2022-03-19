<?php

class Elektronik {

    public  $nama, $merk, $warna, $berat, $dayalistrik, $harga;

    public function __construct( $nama = "nama", $merk = "merk", $warna = "warna", $berat = 0, $dayalistrik = 0, $harga = 0) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->berat = $berat;
        $this->dayalistrik = $dayalistrik;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->merk, $this->warna";

    }

    public function getTipeElektronik() {

        $str = "{$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komputer {

    public  $merk, $processor, $warna, $windows, $ram , $harga;

    public function __construct( $merk = "merk", $processor = "processor", $warna = "warna", $windows = "windows", $ram = "ram", $harga = 0) {

        $this->merk = $merk;
        $this->processor = $processor;
        $this->warna = $warna;
        $this->windows = $windows;
        $this->ram = $ram;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->processor, $this->warna, $this->windows, $this->ram";

    }

    public function getTipeKomputer() {

        $str = "{$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class ElektronikDapur extends Elektronik {

    public function getInfoElektronik() {
        $str = "ElektronikDapur    = {$this->nama} , {$this->getlabel()} , {$this->berat} , {$this->dayalistrik} , Rp. {$this->harga} ";
        return $str; 
    }

}

class ElektronikRuangan extends Elektronik {

    public function getInfoElektronik() {
        $str = "ElektronikRuangan = {$this->nama} , {$this->getlabel()} , {$this->berat} , {$this->dayalistrik} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Laptop extends Komputer {

    public function getInfoKomputer() {
        $str = "Laptop = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class Notebook extends Komputer {

    public function getInfoKomputer() {
        $str = "Laptop = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakInfoElektronik {

    public function cetak(Elektronik $elektronik){
        $str = "{$elektronik->nama} {$elektronik->getlabel()} , Rp. {$elektronik->harga} ";
        return $str;
    }

}

class CetakInfoKomputer {

    public function cetak(Komputer $komputer){
        $str = "{$komputer->merk} {$komputer->getlabel()} (Rp. {$komputer->harga})";
        return $str;
    }

}

$elektronik1 = new ElektronikDapur("Kulkas", "Polytron", "Merah", "2 KG", "130 Watt", 3500000);
$elektronik2 = new ElektronikDapur("Microwave", "LG", "Hitam", "1 KG", "120 Watt", 27500000);
$elektronik3 = new ElektronikRuangan("AC", "Sharp", "Putih", "1 KG", "840 Watt", 2100000);
$elektronik4 = new ElektronikRuangan("TV", "Samsung", "Silver", "2 KG", "100 Watt", 1500000);

$komputer1 = new Laptop("Acer", "Intel i3", "Silver", "Windows 10", "4 GB", 6000000);
$komputer2 = new Laptop("Acer", "Intel Pentium", "Hitam", "Windows 7", "2 GB", 4500000);
$komputer3 = new Notebook("Samsung", "Intel i5", "Putih", "Windows 10", "6 GB", 10000000);
$komputer4 = new Notebook("Hp", "Amd 4", "Gold", "Windows 10", "4 GB", 5000000);

echo $elektronik1->getInfoElektronik();
echo "<br>";
echo $elektronik2->getInfoElektronik();
echo "<br>";
echo $elektronik3->getInfoElektronik();
echo "<br>";
echo $elektronik4->getInfoElektronik();
echo "<hr>";
echo $komputer1->getInfoKomputer();
echo "<br>";
echo $komputer2->getInfoKomputer();
echo "<br>";
echo $komputer3->getInfoKomputer();
echo "<br>";
echo $komputer4->getInfoKomputer();
echo "<hr>";


?>