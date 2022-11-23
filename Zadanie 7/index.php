<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 7</title>
</head>
<body>
<h1>Zadanie 7</h1>
<p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita. Eryk Czuchran 3pir</p>
<form method="post" action="index.php">
    <label>
        Podaj temperaturę w stopniach Celsjusza:<input type="number" name="C"> <input type="submit" value="Oblicz">
    </label>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $C=$_POST['C'];
    function K($C){
        if($C<-273.15){
            return 0;
        }else {
            return $C + 273.15;
        }
    }
    function F($C){
        return $C*9/5+32;
    }
    $K=K($C);
    $F=F($C);
    echo "<hr>";
    echo "Wyniki obliczenia dla $C stopni Celsjusza to:<br>";
    echo "$F stopni Fahrenheita<br>";
    echo "$K stopni Kelwina";
}
?>
</body>
</html>
