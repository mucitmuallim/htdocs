<?php

include("naber.php");

$sorgu = $connect->query("SELECT * FROM deneme");
                        

if ($connect->errno > 0) {
    die("<b>Sorgu Hatası:</b> " . $connect->error);
}

$cikti = $sorgu->fetch_object();

echo "Adı: " . $cikti["ad"] . "<br /> Soyadı: " . $cikti["soyadi"] . "<br /> E-posta: " . $cikti["no"];

$sorgu->close();
$connect->close();

?>