<html>
<head>
<meta charset="UTF-8">
<style>

</style>

</head>
<body>
	<h1>Zakupy</h1>

<?php
	echo '<ol>';
	$plik = fopen("koszyk.txt", "r") or die("Unable to open file!");
	while(!feof($plik)) {
	  echo '<li>'.fgets($plik);
	}
	fclose($plik);

?>

	<form method="POST" action="dodajDoKoszyka.php">
		<input name="produkt"/>
		<input type="submit" value="Dodaj"/>
	</form>

		echo '</ol>';
</body>
</html>