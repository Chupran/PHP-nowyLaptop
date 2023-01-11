<?php
/*$db=mysqli_connect("localhost", "root", "", "filmoteka");
$q="SELECT * FROM rezyserzy";
$wynik=mysqli_query($db, $q);
while($el=mysqli_fetch_row($wynik)){
    echo $el[0]." ".$el[1]." ".$el[2]."<br>";
}
mysqli_close($db);*/
//
$db=mysqli_connect("localhost", "root", "", "filmoteka");
$q="SELECT imie, nazwisko, filmy.tytul FROM `rezyserzy` INNER JOIN `filmy` ON rezyserzy.id=filmy.rezyserzy_id;";
$q2="INSERT INTO rezyserzy(`imie`, `nazwisko`) VALUES('Eryk', 'Czuchran')";
$działanie=mysqli_query($db, $q2);
$wynik=mysqli_query($db, $q);
while($el=mysqli_fetch_row($wynik)){
    echo $el[0]." ".$el[1].", ".$el[2]."<br>";
}
mysqli_close($db);