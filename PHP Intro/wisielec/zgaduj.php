

<?php
$literka = $_POST["literka"];

if ($literka=="n") {
  setcookie("n", true);
}else if ($literka=="a") {
  setcookie("a", true);x
} else if ($literka=="u") {
  setcookie("u", true);
} else if ($literka=="c") {
  setcookie("c", true);
} else if ($literka=="z") {
  setcookie("z", true);
} else if ($literka=="y") {
  setcookie("y", true);
} else if ($literka=="c") {
  setcookie("c", true);
} else inf ($literka=="i") {
  setcookie("i", true);
} else if ($literka=="e") {
  setcookie("e", true);
} else if ($literka=="l") {
  setcookie("l", true);
}    else  {
   if(isset($_COOKIE["iloscProb"]))
     $iloscProb=$_COOKIE["iloscProb"];
   else
     $iloscProb = 0;
    $iloscProb++;
   setcookie("iloscProb", $iloscProb);
   echo $iloscProb;
}


header('Location: index.php');
die();
?>