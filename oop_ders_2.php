<?php

// SINIF VE NESNE OLUŞTURMA

class Araba { 
    public $renk = "Kırmızı";
    public $marka = "Honda";
    public $yakitTipi = "Dizel";

    public function arabaBilgiYazdir(){
        echo "Araba rengi : {$this->renk}<br/>";
        echo "Markası : {$this->marka}<br/>";
        echo "Yakıt tipi : {$this->yakitTipi}<br/>";
    }
}

$araba1 = new Araba;
$araba2 = new Araba;

// Nesne özelliklerini değiştirme
$araba1->renk = "Mavi";
$araba1->marka = "Mercedes";
$araba1->yakitTipi = "Benzinli";

$araba1->arabaBilgiYazdir();

var_dump($araba1);