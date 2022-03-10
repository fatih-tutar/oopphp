<?php

require('classes/db.class.php');

$veritabaniNesnesi = new db();

$kontrol = $veritabaniNesnesi->query("INSERT INTO campaigns (title) values(?)", ['Opet Kampanyası']);
if($kontrol){
    echo 'Kayıt başarılı.';
}else{
    echo 'Kayıt başarısız.';
}

$guncelleme = $veritabaniNesnesi->query("UPDATE campaigns set title = ? WHERE id = ?",['Shell İndirim',5]);

echo "<pre>";
print_r($veritabaniNesnesi->getRows("Select * FROM campaigns"));