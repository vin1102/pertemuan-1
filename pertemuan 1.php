<?php
class handphone
{
    public $merk, $warna, $spesifikasi, $jenis, $harga;

    public function __construct($merk, $warna, $spesifikasi, $harga)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->spesifikas = $spesifikasi;
        $this->harga = $harga;
    }
    public function getlabel()
    {
        return "$this->warna, $this->spesifikasi";
    }
    public function gettipe()
    {
        $str = "{$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class keyboard
{
    public $merk, $warna, $jenis, $dimesi, $harga;

    public function __construct($merk, $warna, $jenis, $dimesi, $harga)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->jenis = $jenis;
        $this->dimensi = $dimesi;
        $this->harga = $harga;
    }
    public function getlabel()
    {
        return "$this->warna, $this->jenis, $this->dimensi";
    }
    public function gettipe()
    {
        $str = "{$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class ElektronikTerbaru extends handphone
{
    public function getInfohandphone()
    {
        $str = "Elektronik    = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class ElektronikTerkeren extends handphone
{
    public function getInfohandphone()
    {
        $str = "Elektronik    = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class Mechanical extends keyboard
{
    public function getInfokeyboard()
    {
        $str = "keyboard = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class rgb extends keyboard
{
    public function getInfokeyboard()
    {
        $str = "keyboard = {$this->merk} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str;
    }
}

class CetakInfohandphone
{
    public function cetak(handphone $handphone)
    {
        $str = "{$handphone->merk} {$handphone->getlabel()} (Rp. {$handphone->harga})";
        return $str;
    }
}

class CetakInfokeyboard
{
    public function cetak(Keyboard $keyboard)
    {
        $str = "{$keyboard->merk} {$keyboard->getlabel()} (Rp. {$keyboard->harga})";
        return $str;
    }
}

$handphone1 = new ElektronikTerbaru("Acer", "Merah", "Snapdragon 660", 3500000);
$handphone2 = new ElektronikTerbaru(
    "Samsung",
    "maroon",
    "Mediatek A7",
    2100000
);
$handphone3 = new ElektronikTerkeren(
    "Xiaomi",
    "Putih",
    "Snapdragon 860",
    4500000
);
$handphone4 = new ElektronikTerkeren("Iphone", "Biru", "Binomic A13", 25500000);

$keyboard1 = new Mechanical(
    "Rexus",
    "Hitam",
    "Dilengkapi Dengan RGB",
    "'14 : 3",
    500000
);
$keyboard2 = new Mechanical("Rudimo", "Hijau", "Mechanical", "'14 : 3", 300000);
$keyboard3 = new rgb("Banggoda", "Merah", "Mechanical", "'14 : 3", 250000);
$keyboard4 = new rgb(
    "Rexus",
    "Putih",
    "Dilengkapi Dengan RGB",
    "'14 : 3",
    590000
);

echo $handphone1->getInfohandphone();
echo "<br>";
echo $handphone2->getInfohandphone();
echo "<br>";
echo $handphone3->getInfohandphone();
echo "<br>";
echo $handphone4->getInfohandphone();
echo "<hr>";

echo $keyboard1->getInfokeyboard();
echo "<br>";
echo $keyboard2->getInfokeyboard();
echo "<br>";
echo $keyboard3->getInfokeyboard();
echo "<br>";
echo $keyboard4->getInfokeyboard();
echo "<br>";
?>  ?>