<?php
	setcookie("uzytkownik","");
?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style/logowanie.css"/>
</head>
<body>

<div id="logowanie">
	<form action="dysk.php" method="POST">
	Login: <input id ="login" name="login"/>
	<input id="przyciskLogowania" type="submit" value="Logowanie"/>
	</form>
</div>
</body>
</html>	