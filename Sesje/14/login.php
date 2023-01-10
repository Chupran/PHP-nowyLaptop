<?php
session_start();
if (isset($_SESSION['log'])) {
    header('location: strona.php');
    exit();
} elseif (isset($_POST['nazwa']) && isset($_POST['haslo'])) {
    if ($_POST['nazwa'] == 'admin' && $_POST['haslo'] == 'admin') {
        $_SESSION['log'] = $_POST['nazwa'];
        header('location: strona.php');
        exit();
    } else {
        echo "Nieprawidłowe dane logowania<br>";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Autoryzacja danych</title>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <form action="http://localhost/loguj.php" method="post">

        <h1>Logowanie</h1>
        <label>Nazwa użytkownika<input type="text" name="nazwa" value="" size="25"><br></label>
        <label>Hasło<input type="password" name="haslo" value="" size="25"></label>
        <label><input type="submit" value="Zaloguj się"></label>
    </form>
</div>
</body>
</html>