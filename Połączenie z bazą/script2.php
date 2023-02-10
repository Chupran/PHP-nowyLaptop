<?php
$base=mysqli_connect("localhost", "root", "", "3pir_2_baza_pracownikow");
$file=fopen("pracownicy.txt", "r");
$counter=0;
while(!feof($file)){
    $tab[$counter]=fgets($file);
    $counter+=1;
}
$counter2=0;
while($counter2<sizeof($tab)) {
    $query = ("INSERT INTO pracownicy VALUES ('$tab[$counter2]');");
	mysqli_query($base, $query);
    $counter2+=1;
}
echo "Wstawiono dane do tabeli w bazie danych. Kliknij <a href='index.php'>tutaj</a>, aby wrócić.";
fclose($file);
mysqli_close($base);