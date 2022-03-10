<?php

// OVERRIDE

class Araba
{
    protected $renk = "Kırmızı"; //PRotected ile bu classtan ve bunun alt classlarından erişilebilir
    protected $marka = "Honda";
    protected $yakitTipi = "Dizel";
    protected $renkler = ["Kırmızı", "Mavi", "Bordo"];
    public $hata = "";

    public function __construct($renk, $marka, $yakitTipi)
    {
        $this->renk = $renk;
        $this->marka = $marka;
        $this->yakitTipi = $yakitTipi;
    }

    // Setter
    public function bilgileriDegistir($renk, $marka, $yakitTipi)
    {
        if (in_array($renk, $this->renkler)) {
            $this->renk = $renk;
        } else {
            $this->hata = "{$renk} rengi yoktur<br/>";
        }
        $this->marka = $marka;
        $this->yakitTipi = $yakitTipi;
    }

    public function arabaBilgileriniYazdir()
    {
        echo "Araba rengi : " . $this->renk . "<br/>";
        echo "Araba marka : " . $this->marka . "<br/>";
        echo "Araba yakıt tipi : " . $this->yakitTipi . "<br/>";
    }
}

class suvModel extends Araba{
    public $marka = "değer atandı"; // bu şekilde aynı isimli değişkene değer atayarak da değişken override edilir.
    public $tasimaKapasitesi = 500;
    public function renkYazdir(){
        echo $this->renk;
    }

    public function __construct($renk,$marka,$yakitTipi,$tasimaKapasitesi){
        $this->tasimaKapasitesi = $tasimaKapasitesi;
        parent::__construct($renk,$marka,$yakitTipi);
    }
    
    public function arabaBilgileriniYazdir()
    {
        parent::arabaBilgileriniYazdir();
        echo "Arabanın taşıma kapasitesi : ".$this->tasimaKapasitesi."<br/>";
    }
}

$araba3 = new Araba("Turuncu", "Renault", "Benzin");
$rangeRover = new suvModel("Laci","Range","Benzin",2000);
$rangeRover->arabaBilgileriniYazdir();