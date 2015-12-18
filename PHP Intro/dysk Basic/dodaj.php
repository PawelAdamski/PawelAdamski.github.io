

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
<style>


</style>
</head>
<body>
<div id="komunikat">
	<span id = "plikDodany">Plik został dodany.</span>
	<a id = "wroc" href="dysk.php">Wróć</a>
</div>
</body>
</html>