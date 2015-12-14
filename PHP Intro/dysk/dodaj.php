

<?php

$nazwa = $_POST["nazwa"];
$tresc = $_POST["tresc"];


$nowy = fopen('dane/'.$nazwa, "w") or die("KONIEC");	
fwrite($nowy, $tresc);
fclose($nowy);

$nowy = fopen("pliki.txt", "a") or die("KONIEC");	
fwrite($nowy, "\n".$nazwa);
fclose($nowy);

include("index.php");
?>