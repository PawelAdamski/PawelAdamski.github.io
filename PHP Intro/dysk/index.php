<html>
<head>
<meta charset="utf8"/>
</head>
<body>

<?php
echo "<ol>";
$plik = fopen("pliki.txt", "r") or die("Unable to open file!");
fgets($plik);
while(!feof($plik)) {
	$nazwa = fgets($plik);
	$link = "dane/$nazwa";
	echo "<li><a href='$link'>$nazwa</a></li>";
}
fclose($plik);
echo "</ol>";
?>

<hr/>
<div>
	<form method="POST" action="dodaj.php">
	Nazwa: <input	name="nazwa"/><br/><br/>
	Treść: <textarea name="tresc">
	</textarea>
	<input type="submit" value="Dodaj"/>
	</form>
</div>


</body>
</html>