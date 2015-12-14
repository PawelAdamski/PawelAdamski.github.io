<html>
<head>
<meta charset="UTF-8">
<style>

</style>

</head>
<body>


<?php
$myfile = fopen("logowania.txt", "a") or die("Unable to open file!");
$txt = "\n".date("Y/m/d h:i:s");
fwrite($myfile, $txt);
fclose($myfile);
?>
	<h1>Logowania</h1>
	<div>
<?php
	echo '<ol>';
	$plik = fopen("logowania.txt", "r") or die("Unable to open file!");
	fgets($plik);
	while(!feof($plik)) {
	  echo '<li>'.fgets($plik);
	}
	fclose($plik);
	echo '<ol>';
?>
	</div>
</body>
</html>