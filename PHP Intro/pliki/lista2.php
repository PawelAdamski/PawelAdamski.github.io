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
	$plik = fopen("zakupy2.txt", "r") or die("Unable to open file!");
	while(!feof($plik)) {
	  echo '<li>'.fgets($plik);
	}
	fclose($plik);
	echo '<ol>';
?>
	</div>
</body>
</html>