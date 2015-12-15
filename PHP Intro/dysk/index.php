<html>
<head>
<meta charset="utf8"/>
<style>
.plik {
	width: 110px;
	padding: 5px;
	margin:5px;
	border: 1px black solid;
	text-align: center;
	float:left;
}

</style>
</head>
<body>

<div>
<?php
$plik = fopen("pliki.txt", "r") or die("Unable to open file!");
fgets($plik);
while(!feof($plik)) {
	$nazwa = fgets($plik);
	$link = "dane/$nazwa";
	echo "<div class='plik'>";
	echo "<a href='$link'>";
	if (strpos($nazwa,"txt")) {
		echo "<img src='fileTXT.png' width='100px'/>";
	} else if (strpos($nazwa,"doc")) {
		echo "<img src='fileDOC.png' width='100px'/>";
	} else if (strpos($nazwa,"xls")) {
		echo "<img src='fileXLS.png' width='100px'/>";
	} else {
		echo "<img src='file.png' width='100px'/>";
	}
	echo "$nazwa</a>";
	echo "</a>";
	echo "</div>";
	
}
fclose($plik);
?>


<div style="clear:left">
	<hr/>
	<form method="POST" action="dodaj.php">
	<input placeholder="Nazwa pliku" name="nazwa"/>
	<input type="submit" value="Dodaj"/>
	<br/><br/>
	<textarea placeholder = "Treść plik" name="tresc" style="width:300px;height:300px"></textarea>
	
	</form>
</div>


</body>
</html>