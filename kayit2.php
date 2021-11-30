<?php

include("naber.php");

$baslik = $_POST["baslik"];
$kisa_aciklama = $_POST["kisa_aciklama"];
$aciklama = $_POST["aciklama"];
$video = $_POST["video"];
$yayin_tarihi = $_POST["yayin_tarihi"];
$kategori = $_POST["kategori"];

$ekle= "insert into giris_form (baslik,kisa_aciklama,aciklama,video,kategori)  values('$baslik','$kisa_aciklama','$aciklama','$video','$kategori')";

if ($connect->query($ekle)) {
    echo "Veritabanına veri eklendi";
    } 
    else {
    echo "eklenmedi";
    }
?>

