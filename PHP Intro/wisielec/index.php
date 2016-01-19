<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<?php
  if(isset($_COOKIE["iloscProb"]))
        $iloscProb=$_COOKIE["iloscProb"];
    else
        $iloscProb = 0;

?>

<form action="zgaduj.php" method="POST">
    Literka:<input name="literka" maxlength="1"> <input type="submit" value="Zgaduj"/>
</form>
<div style="font-size:30px;">
<?php
if ($_COOKIE["n"]) {
 echo "N";
} else {echo "*";}
if ($_COOKIE["a"]) {
  echo "A";
}else {echo "*";}
  
if ($_COOKIE["u"]) {
  echo "U";
}else {echo "*";}
if ($_COOKIE["c"]) {
  echo "C";
}else {echo "*";}
if ($_COOKIE["z"]) {
 echo "Z";
}else {echo "*";}
if ($_COOKIE["y"]) {
  echo "Y";
}else {echo "*";}
if ($_COOKIE["c"]) {
  echo "C";
}else {echo "*";}
if ($_COOKIE["i"]) {
  echo "I";
}else {echo "*";}
if ($_COOKIE["e"]) {
 echo "E";
}else {echo "*";}
if ($_COOKIE["l"]) {
  echo "L";
} else {echo "*";}

?>
</div>
    <img src=<?php echo "'proba_$iloscProb.png'"?>/>

<form action="nowa.php" method="POST">
    <input type="submit" value="Nowa gra"/>
</form>
</body>
</html>
