<?php
$base=mysqli_connect("localhost", "root", "", "3pir2_dane2");
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
<header>
    <section id="miniatury">
        <a href="pliki5/borowik.jpg"><img src="pliki5/borowik-miniatura.jpg" alt="Idziemy na grzyby!"></a>
    </section>
    <section id="tytułowy">
        <h1>Idziemy na grzyby!</h1>
    </section>
</header>
<main>
    <section id="lewy">
        <?php
        $query=mysqli_query($base, "SELECT grzyby.nazwa_pliku, grzyby.potoczna FROM `grzyby`");
        while($row=mysqli_fetch_row($query)){
            echo "<img src='pliki5/$row[0]' alt='$row[1]' title='$row[1]'>";
        }
        ?>
    </section>
    <section id="prawy">
        <h2>Grzyby jadalne</h2>
        <?php
        $query2=mysqli_query($base, "SELECT grzyby.nazwa, grzyby.potoczna FROM grzyby WHERE grzyby.jadalny=true;");
        while($row2=mysqli_fetch_row($query2)){
            echo "<p>$row2[0] ($row2[1])</p>";
        }
        ?>
        <h2>Polecamy do sosów</h2>
        <?php
        $query3=mysqli_query($base, "SELECT grzyby.nazwa, grzyby.potoczna, rodzina.nazwa FROM grzyby INNER JOIN rodzina ON rodzina.id=grzyby.rodzina_id WHERE grzyby.potrawy_id=1");
        echo "<ol>";
        while($row3=mysqli_fetch_row($query3)){
            echo "<li>$row3[0] ($row3[1]), rodzina: $row3[2]</li>";
        }
        echo "</ol>"
        ?>
    </section>
</main>
<footer>
    <p>Autor: Eryk Czuchran</p>
</footer>
</body>
</html>
<?php
mysqli_close($base);
?>