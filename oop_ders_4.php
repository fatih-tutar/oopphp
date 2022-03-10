<?php

// YAPICI VE YIKICI METODLAR CONSTRUCT

class Araba
{
    public $renk = "Kırmızı";
    public $marka = "Honda";
    public $yakitTipi = "Dizel";

    public function __construct($renk = "", $marka, $yakitTipi) {
        $this->renk = $renk;
        $this->marka = $marka;
        $this->yakitTipi = $yakitTipi;
    }
    public function __destruct()
    {
        echo 'Nesne son buldu.';
    }
}

$araba3 = new Araba("","Toyota","Benzin");
var_dump($araba3);