<?php
$base=mysqli_connect('localhost', 'root', '', '3pir_dane');
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<header>
    <section class="head">
        <img src="pliki3/klaps.png" alt="Nasze filmy">
    </section>
    <section class="head">
        <h1>BAZA FILMÓW!</h1>
    </section>
    <section class="head">
        <form method="post" action="index.php">
            <label id="">
                <select name="genre">
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="animacja">animacja</option>
                    <option value="dramat">dramat</option>
                    <option value="horror">horror</option>
                    <option value="komedia">komedia</option>
                </select>
            </label>
            <label><input type="submit" value="Wyślij"></label>
        </form>
    </section>
    <section class="head">
        <img src="pliki3/gwiezdneWojny.jpg" alt="Szturmowcy">
    </section>
</header>
<main>
    <section class="mai">
        <h1>Wybrano filmy:</h1>
        <?php
            $data=$_POST['genre'];
            $query=mysqli_query($base, "SELECT filmy.tytul, filmy.rok, filmy.ocena FROM filmy WHERE gatunki.nazwa='$data';");
            while ($row=mysqli_fetch_row($query)){
                echo "<p>Tytuł: $row[0], Ocena: $row[2]</p>";
            }
        ?>
    </section>
    <section class="mai">
        <h2>Wszystkie filmy:</h2>
        <?php
            $query2=mysqli_query($base, "SELECT filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.imie FROM filmy INNER JOIN rezyserzy ON filmy.rezyserzy_id=rezyserzy.id;");
            while ($row2=mysqli_fetch_row($query2)){
                echo "<p>$row2[0]. $row2[1], reżyseria: $row2[2] $row2[3]</p>";
            }
        ?>
    </section>
</main>
<footer>
    <p>Autor: Eryk Czuchran 3pir</p> <a href="kwerendy.txt">Zapytania do bazy</a> <a href="https://filmy.pl" target="_blank">Przejdź na filmy.pl</a>
</footer>
</body>
</html>
<?php
mysqli_close($base);
?>