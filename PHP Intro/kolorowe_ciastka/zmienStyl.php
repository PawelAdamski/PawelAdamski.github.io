<?PHP

$kolor = $_GET["kolor"];
$czcionka = $_GET["czcionka"];
$rozmiar = $_GET["rozmiar"];

setcookie("kolor",$kolor,time() + (10 * 365 * 24 * 60 * 60));
setcookie("czcionka",$czcionka,time() + (10 * 365 * 24 * 60 * 60));
setcookie("rozmiar",$rozmiar,time() + (10 * 365 * 24 * 60 * 60));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body {
        background-color:<?php echo $kolor ?>;
        font-size: <?php echo $rozmiar ?>;
        font-family: <?php echo $czcionka ?>;
        }
    </style>
 </head>
<body>
<h1>Styl zmieniony</h1>
<a href="index.php">Wróć</a>
</body>
</html>