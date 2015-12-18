<?php	
	if (isset($_POST["login"])) {
		
		$uzytkownik=$_POST["login"];
		setcookie("uzytkownik",$uzytkownik);
		
		$plik = fopen("pliki_$uzytkownik.txt", "a");
		fclose($plik); 	

		mkdir('dane/'.$uzytkownik);
	} else {
		$uzytkownik=$_COOKIE["uzytkownik"];
	}
?>

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

#dodajPlik {
	float:right;
	width: 300px;
}
</style>
</head>
<body>

<div id="naglowek">
	<span id="godzina"> <?php echo date("h:i:s") 	?></span>
	<a href="logowanie.php">Wyloguj</a>
</div>

<div id="pliki">
<?php

$plik = fopen("pliki_$uzytkownik.txt", "r") or die("Unable to open file!");
fgets($plik);
while(!feof($plik)) {
	$nazwa = fgets($plik);
	$link = "dane/".$uzytkownik."/".$nazwa;
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


<div id="dodajPlik">
	<form method="POST" action="dodaj.php">
	<input placeholder="Nazwa pliku" name="nazwa"/>
	<input type="submit" value="Dodaj"/>
	<br/><br/>
	<textarea placeholder = "Treść plik" name="tresc" style="width:300px;height:300px"></textarea>
	
	</form>
</div>


</body>
</html>