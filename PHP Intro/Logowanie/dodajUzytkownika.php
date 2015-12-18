<?php

$login = $_POST["login"];
$password = $_POST["password"];

$myfile = fopen("uzytkownicy.txt", "a") or die("Unable to open file!");
fwrite($myfile, $login.";".$password."\n");
fclose($myfile);

?>

