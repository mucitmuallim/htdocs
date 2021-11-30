<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">

<title> Veri Ekleme </title>

</head>

<body>

<form action="kayit.php" method="POST">

<input type="text" name="ad" value="başlık"></br>
<input type="text" name="soyad" value="resim"></br>
<input type="text" name="no"></br>

<input type="submit" name="gonder" value="Kayıt Ol">


</form>
$ad = $_POST["ad"];
$soyad = $_POST["soyad"];
$no = $_POST["no"];
</body>

</html>
