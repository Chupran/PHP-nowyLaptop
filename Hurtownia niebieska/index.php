<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<header>
    <h1>W naszej hurtowni kupisz najtaniej!</h1>
</header>
<main>
    <section id="lewy">
        <h3>Ceny wybranych artykułów w hurtowni:</h3>
        <table>
            <tr>
                <td>

                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>

                </td>
            </tr>
        </table>
    </section>
    <section id="środkowy">
        <h3>Ile będą kosztować Twoje zakupy?</h3>
        <form action="index.php" method="post">
            <label>
                wybierz artykuł
                <select name="art">
                    <option value="zeszyt_60_kartek">Zeszyt 60 kartek</option>
                    <option value="zeszyt_32_kartki">Zeszyt 32 kartki</option>
                    <option value="cyrkiel">Cyrkiel</option>
                    <option value="linijka_30_cm">Linijka 30 cm</option>
                    <option value="ekierka">Ekierka</option>
                    <option value="linijka_50_cm">Linijka 50 cm</option>
                </select>
            </label>
            <label>Liczba sztuk:<input type="number" name="num"></label>
            <label><input type="submit" value="OBLICZ"></label>
        </form>
    </section>
    <section id="prawy">
        <img src="materialy2/zakupy2.png" alt="hurtownia">
        <h3>Kontakt</h3><br>
        <p>telefon:<br>
            111222333<br>
            e-mail:<br>
            <a href="mailto: hurt@wp.pl">hurt@wp.pl</a> </p>
    </section>
</main>
<footer>
    <h4>Witrynę wykonał: Eryk Czuchran</h4>
</footer>
</body>
</html>