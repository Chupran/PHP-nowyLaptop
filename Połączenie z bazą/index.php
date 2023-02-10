<?php
$base=mysqli_connect("localhost", "root", "", "3pir_2_baza_pracownikow");
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Połączenie z bazą danych</title>
</head>
<body>
<h1>Eryk Czuchran 3pir</h1>
<form method="post" action="script1.php">
    <input type="submit" value="Stwórz tabelę">
</form>
<form method="post" action="script2.php">
    <input type="submit" value="Wyślij dane">
</form>
</body>
</html>
<?php
mysqli_close($base);
?>