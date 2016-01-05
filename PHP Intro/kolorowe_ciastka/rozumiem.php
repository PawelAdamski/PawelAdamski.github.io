<?PHP


$kolor = $_COOKIE["kolor"];
$czcionka = $_COOKIE["czcionka"];
$rozmiar = $_COOKIE["rozmiar"];

setcookie("rozumiem",true,time() + (10 * 365 * 24 * 60 * 60));
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
<h1>Regulamin</h1>
<pre>
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
Bla bla bla bla bla
</pre>
<a href="index.php">Wróć</a>
</body>
</html>