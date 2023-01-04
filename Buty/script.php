<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twoje zamówienie:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
echo "<h1>Wprowadzono dane osobowe:</h1><hr>";
echo "Twoje imię i nazwisko: ".trim($_POST['nameAnd'])."<br>";
echo "Twój email: ".trim($_POST['email'])."<br>";
echo "Twój numer telefonu: ".trim($_POST['tel'])."<hr>";
echo "Dziękujemy za twoją hstorię związaną z butami: ".$_POST['textA']."<hr>";
echo "<h1>Twój projekt butów:</h1><br>";
if (!isset($_POST['color'])){
    echo "Nie zaznaczyłeś koloru! Przyjdą zatem w kolorze najtańszym<br>";
}else{
    echo "Twoje buty są kolorze: ".trim($_POST['color'])."<br>";
}
echo "Rozmiar trampek: ".$_POST['size']."<br>";
if(!empty($_POST['options'])){
    echo "Dodatkowe funkcje twoich butów:<br>";
    foreach ($_POST['options'] as $value){
        echo "$value<br>";
    }
    echo "<br>";
}else{
    echo "Nie wybrałeś dodatków<br>";
}
?>
</body>
</html>