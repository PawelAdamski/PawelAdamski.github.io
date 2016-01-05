<?PHP

$kolor = $_COOKIE["kolor"];
$czcionka = $_COOKIE["czcionka"];
$rozmiar = $_COOKIE["rozmiar"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        #ciasteczka {
        width:90%;
        margin-left:auto;
        margin-right:auto;
        border: 1px black solid;
        padding: 5px;
        background-color:lightyellow;
        }
        #ciasteczka .tytul {
        font-size:1.5em;

        }
        #ciasteczka .tresc {
        margin-top:10px;
        margin-bottom:5px;
        }

                body {
                background-color:<?php echo $kolor ?>;
                font-size: <?php echo $rozmiar ?>;
                font-family: <?php echo $czcionka ?>;
                }

    </style>
</head>
<body>
<?php
if(!isset($_COOKIE["rozumiem"])) {
    echo '<div id="ciasteczka">';
    echo '<div class="tytul">Ważne: Strona wykorzystuje pliki cookies.</div>';
    echo '<div class="tresc">W ramach naszej witryny stosujemy pliki cookies w celu świadczenia Państwu usług na najwyższym poziomie. Korzystanie z witryny bez zmiany ustawień dotyczących cookies oznacza, że będą one zamieszczane w Państwa urządzeniu końcowym. Możecie Państwo dokonać w każdym czasie zmiany ustawień dotyczących cookies.</div>';
    echo '<form action="rozumiem.php"><input type="submit" value="Ok, rozumiem"/></form>';
    echo '</div>';
}
?>
<br/>
<form action="zmienStyl.php">
    Kolor: <input type="color" name="kolor" value="#FFFFFF"/></br>
    Czcionka: <select name="czcionka">
    <option>Arial</option>
    <option>Times New Roman</option>
    <option>courier</option>
    </select></br>
    Rozmiar:  <input type="number" name="rozmiar" value="12"><br/>
    <input type="submit" value="Zmień styl"/>
</form>
    

</body>
</html>