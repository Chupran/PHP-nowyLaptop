<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 85</title>
</head>
<body>
    <h1>Zadanie 85</h1>
<p>Napisz program, który dla trzech liczb całkowitym n, min, max wyświetla n liczb pseudolosowych z zakresu min, max.</p>
<p>Eryk Czuchran</p>
<form method="post" action="index.php">
    <label>Podaj N<input type="number" name="n"></label>
    <label>Podaj minimalną liczbę:<input type="number" name="min"></label>
    <label>Podaj maksymalną liczbę:<input type="number" name="max"></label>
    <label><input type="submit" value="Wyślij"></label>
</form>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $n=$_POST['n'];
        $min=$_POST['min'];
        $max=$_POST['max'];
        $i=0;
        echo "Wylosowane liczby to: ";
        while($i<$n){
            $x=rand($min, $max);
            echo "$x ";
        }
    }
    ?>
</body>
</html>