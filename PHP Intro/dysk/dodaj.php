

<?php

$nazwa = $_POST["nazwa"];
$tresc = $_POST["tresc"];


$nowy = fopen('dane/'.$nazwa, "w") or die("KONIEC");	
fwrite($nowy, $tresc);
fclose($nowy);

$nowy = fopen("pliki.txt", "a") or die("KONIEC");	
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
<h1>Plik został dodany.</h1>
<a href="index.php"><h2>Wróć</h2></a>
</body>
</html>