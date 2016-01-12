<?php

    $rower = $_GET["rower"];
    setcookie($rower,true,0);

    $cena = $_GET["cena"];
    $staraCena = $_COOKIE["cena"];
    setcookie("cena",$cena+$staraCena,0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
body {
	background-color: lightblue;
}


#komunikat {
	border: 1px darkblue solid;
	width: 150px;
	height: 50px;
	background-color: white;
	padding: 10px;
	margin: 200px auto 0 auto;
}


#wroc {
	border:darkblue 2px solid;
	margin-top:5px;
	width: 40px;
	padding: 5px;

background-color: blue;
}

#wroc a {
	text-decoration: none;
	color: white;
}
    </style>
</head>

<body>
<div id="komunikat">
	<div id = "plikDodany">Produkt został dodany.</div>
	<div id="wroc"><a href="index.php">Wróć</a></div>
</div>
</body>
</html>