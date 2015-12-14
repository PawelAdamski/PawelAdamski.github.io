<html>
<head>
<meta charset="UTF-8">
<style>
td{
	width: 50px;
	height: 50px;
}

.zielony {
	background-color: green;
}
.czerwony {
	background-color: red;
}
</style>
</head>
<body>
	
<?php

$rozmiar = $_GET["rozmiar"];

echo "<table>";
for ($j = 1; $j <= $rozmiar; $j++) {
	echo "<tr>";
	for ($i = 1; $i <= $rozmiar; $i++) {
		if (($i+$j) % 2 ==0) {
			$kolor = "zielony";
		} else {
			$kolor = "czerwony";
		}
	    echo "<td class='$kolor'>$i</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>
</body>
</html>