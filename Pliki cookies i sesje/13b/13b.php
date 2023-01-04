<?php
if(!isset($_COOKIE['dane']) && !isset($_POST['nazw'])){
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Przesyłanie danych użytkownika</title>
</head>
<body>
<form action="13b.php" method="post">
    <label>Podaj nazwisko i imię:<br><input type="text" name="nazw"></label>
    <label>Podaj miesiąc i dzień swoich urodzin:<br><input type="date" name="urod"></label>
    <label><input type="submit" value="Wyślij"> </label>
</form>
<?php
}else{
    if(isset($_POST['nazw'])){
        setcookie('dane', $_POST['nazw'], time()+60*60*24*365);
        setcookie('urodziny', $_POST['urod'], time()+60*60*24*365);
        echo "Dziękujemy za wprowadzenie danych.";
    }else{
        echo"Witamy po raz kolejny! ".$_COOKIE['dane']."!<br>";
        $dataM=date("m");
        $dataD=date("d");
        $dataUrodzin=$_COOKIE['urodziny'];
        $day=$dataUrodzin[8];
        $day.=$dataUrodzin[9];
        $month=$dataUrodzin[5];
        $month.=$dataUrodzin[6];
        echo "Twoje urodziny odbędą się: ".$_COOKIE['urodziny']."! To za ".$month-$dataM." miesięcy i ".$day-$dataD." dni!";
        //Eryk Czuchran
    }
}
?>
</body>
</html>