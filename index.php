<?php

$dosya = ("bilgi.txt","a+");

$IP_Adresi = $_SERVER["REMOTE_ADDR"];
$Tarayıcı = $_SERVER["HTTP_USER_AGENT"];
$Tarih = time();

$Kaydet = $IP_Adresi."\t".$Tarayıcı."\t".$Tarih."\n";

fwrite($dosya,$kaydet);
while ($oku = fgets($dosya)) {
    echo $oku."<br />"
}

?>
