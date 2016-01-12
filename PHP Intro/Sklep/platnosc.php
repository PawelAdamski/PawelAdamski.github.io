<?php
    setcookie("1",false,0);
    setcookie("2",false,0);
    setcookie("3",false,0);
    setcookie("4",false,0);
    setcookie("5",false,0);
    setcookie("6",false,0);
    setcookie("cena",0,0);
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
	<div id = "plikDodany">Płatność przyjęta</div>
	<div id="wroc"><a href="index.php">Wróć</a></div>
</div>
</body>
</html>