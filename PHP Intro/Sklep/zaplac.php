
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
	width: 350px;
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
	<div id = "plikDodany"><form action="platnosc.php">
                           Rodzaj płatności:
                           <input type="radio" name="platnosc">Online
                           <input type="radio" name="platnosc">Przelew
                           <input type="submit" value="Zapłać">
                           </form></div>
	<div id="wroc"><a href="index.php">Wróć</a></div>
</div>
</body>
</html>
