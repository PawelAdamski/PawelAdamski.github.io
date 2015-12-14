<html>
<head>
<meta charset="UTF-8">
<style>

</style>

</head>
<body>
	<h1>Zakupy</h1>
	<div>
<?php
	echo '<ol>';
	$plik = fopen("zakupy.txt", "r") or die("Unable to open file!");
	echo '<li>'.fgets($plik);
	echo '<li>'.fgets($plik);
	echo '<li>'.fgets($plik);
	echo '<li>'.fgets($plik);
	fclose($plik);
	echo '<ol>';
?>
	</div>
</body>
</html>