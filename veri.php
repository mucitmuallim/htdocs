<?php

include("naber.php");


$sql="SELECT * FROM giris_form";
$sorgu=mysqli_query($connect,$sql);
while( $sonuc=mysqli_fetch_row($sorgu) ){
    echo $sonuc[0];    // ogrID kolonu
    echo $sonuc[1];   // ogrAd kolonu
    echo $sonuc[2];   // ogrSoyad kolonu
    echo $sonuc[3];     // ogrNo kolonu
}
?>
</hr>
