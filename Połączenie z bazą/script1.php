<?php
$base=mysqli_connect("localhost", "root", "", "3pir_2_baza_pracownikow");
$query=("CREATE TABLE pracownicy(`id` INT UNIQUE NOT NULL, `nazwisko` VARCHAR(30), `imie` VARCHAR(30), `stanowisko` VARCHAR(30), `dział` VARCHAR(30), `sekcja` VARCHAR(30));");
mysqli_query($base, $query);
echo "Utworzono tabelę w bazie danych. Kliknij <a href='index.php'>tutaj</a>, aby wrócić.";
mysqli_close($base);