<?php
echo "Dziękujemy za twój projekt butów!<br>";
echo "Wprowadzono dane osobowe:<br>";
echo "Twoje imię i nazwisko ".trim($_POST['nameAnd'])."<br>";
echo "Twój email ".trim($_POST['email'])."<br>";
echo "Twój numer telefonu ".trim($_POST['tel'])."<br>";
echo "Dziękujemy za twoją hstorię związaną z butami:<br>".$_POST['textA']."<br>";
echo "Twój projekt butów:<br>";
if (!isset($_POST['color'])){
    echo "Nie zaznaczyłeś koloru! Przyjdą zatem w kolorze najtańszym<br>";
}else{
    echo "Twoje buty są kolorze: ".trim($_POST['color'])."<br>";
}
if(!empty($_POST['options'])){
    echo "Dodatkowe funkcje twoich butów: <ul>";
    foreach ($_POST['options'] as $value){
        echo "<li>$value</li>";
    }
    echo "</ul><br>";
}else{
    echo "Nie wybrałeś dodatków<br>";
}
echo "Twoje buty przyjdą w rozmiarze ".$_POST['size'];