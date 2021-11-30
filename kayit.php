<?php

include("naber.php");

$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$no = $_POST["no"];

$ekle= "insert into deneme (ad,soyad,no)  values('$ad','$soyad','$no')";


if ($connect->query($ekle)) {
    echo "Veritabanına veri eklendi";
    } 
    else {
    echo "eklenmedi";
    }
?>