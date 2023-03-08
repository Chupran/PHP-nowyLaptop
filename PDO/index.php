<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteka PDO</title>
</head>
<body>
<form action="index.php" method="post">
    <label>
        Podaj imię autora<input type="text" name="nameA">
    </label>
    <label>
        Podaj nazwisko autora<input type="text" name="surnameA">
    </label>
    <label>
        <input type="submit" value="Wyślij dane">
    </label>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['nameA'];
    $surname=$_POST['surnameA'];
    $base=new PDO("mysql:host=localhost;dbname=3pir2_biblioteka", "root", "");
    $base->query("INSERT INTO autorzy (id, imie, nazwisko) VALUES (null, '$name', '$surname');");
    $base=null;
    }
?>
</body>
</html>