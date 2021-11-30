<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dam";

    $connect = new mysqli ($servername,$username,$password,$dbname);

    if ($connect->connect_error) {
        die ("bağlantıda hata");
    }
        echo "kuruldu bağlantı";
    
?>