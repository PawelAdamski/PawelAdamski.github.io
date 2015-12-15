<html>
<head>
<meta charset="UTF-8">
<style>

</style>

</head>
<body>

<?php
$myfile = fopen("koszyk.txt", "a") or die("Unable to open file!");
$txt = $_POST['produkt']."\n";
fwrite($myfile, $txt);
fclose($myfile);
?>



	<h1>Zakupy</h1>
	<div>

<?php
	echo '<ol>';
	$plik = fopen("koszyk.txt", "r") or die("Unable to open file!");
	while(!feof($plik)) {
	  echo '<li>'.fgets($plik);
	}
	fclose($plik);
	echo '</ol>';
?>

	<form method="POST" action="dodaj.php">
		<input name="produkt"/>
		<input type="submit"/>
	</form>

</body>
</html>