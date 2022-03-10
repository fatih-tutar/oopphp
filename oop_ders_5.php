<?php

// SINIF VE NESNE OLUŞTURMA

class Araba
{
    private $renk = "Kırmızı";
    private $marka = "Honda";
    private $yakitTipi = "Dizel";
    private $renkler = ["Kırmızı","Mavi","Bordo"];
    public $hata = "";

    public function __construct($renk, $marka, $yakitTipi)
    {
        $this->renk = $renk;
        $this->marka = $marka;
        $this->yakitTipi = $yakitTipi;
    }

    // Setter
    public function bilgileriDegistir($renk,$marka,$yakitTipi)
    {
        if(in_array($renk,$this->renkler)){
            $this->renk = $renk;
        }else{
            $this->hata = "{$renk} rengi yoktur";
        }
        $this->marka = $marka;
        $this->yakitTipi = $yakitTipi;
    }
    
    public function bilgileriYazdir(){
        echo "Araba rengi : " . $this->renk."<br/>";
        echo "Araba marka : ".$this->marka."<br/>";
        echo "Araba yakıt tipi : " . $this->yakitTipi."<br/>";
    }
}

$araba3 = new Araba("Turuncu", "Toyota", "LPG");
$araba3->bilgileriYazdir();
$araba3->bilgileriDegistir("Mor","Audi","Benzin");
$araba3->bilgileriYazdir();
if(!empty($araba3->hata)){
    echo $araba3->hata;
}
