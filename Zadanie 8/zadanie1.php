<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 1</title>
</head>
<body>
<h1>Zadanie 1</h1>
<p>Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora warunkowego "?" (wariant 2).</p>
<table style="border: 1px black solid">
    <tr>
        <td>
            <p>Imię i nazwisko</p>
        </td>
        <td>
            <p>Klasa i grupa</p>
        </td>
        <td>
            <p>Data</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>Eryk Czuchran</p>
        </td>
        <td>
            <p>3pir, grupa 2</p>
        </td>
        <td>
            <p>23.11.2022r</p>
        </td>
    </tr>
</table>
<form method="post" action="zadanie1.php">
    <label>
        <input type="number" name="num"><input type="submit" value="Oblicz">
    </label>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $number=$_POST['num'];
    function result1($number){
        if($number>=0){
            return $number;
        }else{
            return $number*(-1);
        }
    }
    function result2($number){
        return $number>=0?$number:$number*(-1);
    }
    $result=result1($number);
    $result2=result2($number);
    echo "$result<br>";
    echo "$result2";
}
?>
</body>
</html>
