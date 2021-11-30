<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">

<title> Veri Ekleme </title>

</head>

<body>

<form action="kayit2.php" method="POST">

<input type="text" name="baslik" value="başlık"></br>
<input type="text" name="kisa_aciklama" value="kisa_aciklama"></br>
<textarea name="aciklama" rows="10" cols="30">metni gir</textarea></br>
<input type="text" name="video" value="video"></br>
<input type="data" name="kayit_tarihi"></br>
<label for="cars">Kategori seç</label>
    <select id="kategori" name="kategori">
    <option value="teknoloji">teknoloji</option>
    <option value="kodlama">kodlama</option>
    <option value="ders">ders</option>
    </select></br>

<input type="submit" name="gonder" value="Kayıt Ol">


</form>

</body>

</html>