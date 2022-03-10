<?php

// SINIF VE NESNE OLUŞTURMA

class Araba
{
    private $renk = "Kırmızı";
    public $marka = "Honda";
    public $yakitTipi = "Dizel";

    public function __construct($renk, $marka, $yakitTipi)
    {
        $this->renk = $renk;
        $this->marka = $marka;
        $this->yakitTipi = $yakitTipi;
    }

    private function renkDegistir($renk)
    {
        $this->renk = $renk;
    }

    public function rengiDegistir($renk){
        $this->renkDegistir($renk);
    }
}

$araba3 = new Araba("Turuncu", "Toyota", "LPG");
$araba3->rengiDegistir("Mor");

var_dump($araba3);
