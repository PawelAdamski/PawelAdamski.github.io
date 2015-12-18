

<?php

$nazwa = $_POST["nazwa"];
$tresc = $_POST["tresc"];
$uzytkownik=$_COOKIE["uzytkownik"];

$nowy = fopen('dane/'.$uzytkownik."/".$nazwa, "w") or die("KONIEC");	
fwrite($nowy, $tresc);
fclose($nowy);

$nowy = fopen("pliki_$uzytkownik.txt", "a") or die("KONIEC");	
fwrite($nowy, "\n".$nazwa);
fclose($nowy);
?>

<html>
<head>
<meta charset="utf8"/>
<link rel="stylesheet" href="style/dodaj.css"/>
</head>
<body>
<div id="komunikat">
	<div id = "plikDodany">Plik został dodany.</div>
	<div id="wroc"><a href="dysk.php">Wróć</a></div>
</div>
</body>
</html>