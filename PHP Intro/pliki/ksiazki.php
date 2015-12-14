<html>
<head>
<meta charset="UTF-8">
<style>
div {
	margin: auto;
	width: 400px;
	white-space: pre;
}
body {
	background-color: orange;
}
h1 {
	text-align: center;
}

</style>

</head>
<body>
	<h1> Pan Tadeusz</h1>
	<div>
<?php
	echo readfile("panTadeusz.txt");
?>
	</div>
</body>
</html>