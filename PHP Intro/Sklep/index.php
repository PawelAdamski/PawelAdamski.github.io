<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {margin:0px;}
        img {
            width:300px;
            height:250px;

        }

        td span {
            display:block;
        }
        td {
            background-color:lightblue;
            padding:5px;
        }
table {margin:0px;}
        #menu {
       padding:5px;
            width:200px;
            height:100vh;
            background-color:lightblue;
        }

        #menu, #ceny {
        float:left
        }

        #menu a {
display: block;
 height: 20px;
 width: 150px;
 background: #34696f;
 border: 2px solid rgba(33, 68, 72, 0.59);

 /*Step 3: Text Styles*/
 color: rgba(0, 0, 0, 0.55);
 text-align: center;
 font: bold  "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
 margin:5px;
        }

        #menu a {
         text-decoration: none;
        }
    </style>
</head>
<body>
<div id="menu">
Wartość koszyka: <?php echo $_COOKIE["cena"]?> zł
<a href="zaplac.php">Zapłać</a>
<a href="koszyk.php">Pokaż koszyk</a>
<a href="wyczysc.php">Wyczyść koszyk</a>
</div>
<table id="ceny">

    <tr>
        <td><img src="rower1.jpg">  <span>Rower 1</span><span>Cena: 1100 zł</span><span><a href="dokoszyka.php?rower=1&cena=1100">Do koszyka</a></span></td>
        <td><img src="rower2.jpg">  <span>Rower 2</span><span>Cena: 2400 zł</span><span><a href="dokoszyka.php?rower=2&cena=2400">Do koszyka</a></span></td>
        <td><img src="rower3.jpg">   <span>Rower 3</span><span>Cena: 1000 zł</span><span><a href="dokoszyka.php?rower=3&cena=1000">Do koszyka</a></span></td>
    </tr>
    <tr>
        <td><img src="rower4.jpg">  <span>Rower 4</span><span>Cena: 600 zł</span><span><a href="dokoszyka.php?rower=4&cena=600">Do koszyka</a></span></td>
        <td><img src="rower3.jpg">  <span>Rower 5</span><span>Cena: 800 zł</span><span><a href="dokoszyka.php?rower=5&cena=800">Do koszyka</a></span></td>
        <td><img src="rower1.jpg">  <span>Rower 6</span><span>Cena: 900 zł</span><span><a href="dokoszyka.php?rower=6&cena=900">Do koszyka</a></span></td>
    </tr>
</table>


</body>
</html>