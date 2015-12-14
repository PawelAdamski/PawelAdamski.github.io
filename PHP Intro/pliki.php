<?php

$plik = fopen("mojPlik.txt","r");

//fwrite($plik, "Hi, woman");
$pierwszaLinia = fgets($plik);
echo "Czy to koniec:".feof($plik);

fclose($plik);
?>