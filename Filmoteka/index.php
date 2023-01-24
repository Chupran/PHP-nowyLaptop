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
    <section>
        <img src="pliki3/klaps.png" alt="Nasze filmy">
    </section>
    <section>
        <h1>BAZA FILMÓW!</h1>
    </section>
    <section>
        <form method="post">
            <label>
                <select>
                    <option name="Sci-Fi">Sci-Fi</option>
                    <option name="animacja">animacja</option>
                    <option name="dramat">dramat</option>
                    <option name="horror">horror</option>
                    <option name="komedia">komedia</option>
                </select>
            </label>
            <label><input type="submit" value="Wyślij"></label>
        </form>
    </section>
    <section>
        <img src="pliki3/gwiezdneWojny.jpg" alt="Szturmowcy">
    </section>
</header>
<main>
    <section>
        <h1>Wybrano filmy:</h1>
        <?php

        ?>
    </section>
    <section>
        <h2>Wszystkie filmy:</h2>
        <?php

        ?>
    </section>
</main>
<footer>
    <p>Autor: Eryk Czuchran 3pir</p> <a href="kwerendy.txt">Zapytania do bazy</a> <a href="https://filmy.pl" target="_blank">Przejdź na filmy.pl</a>
</footer>
</body>
</html>