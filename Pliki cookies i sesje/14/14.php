<?php
session_start();
if(isset($_SESSION['log'])){
    header('location: strona.php');
    exit();
}elseif(isset($_POST['nazwa']) && isset($_POST['hasło'])){
    if($_POST['nazwa']=='janek' && $_POST['hasło']=='jan23'){
        $_SESSION['log']=$_POST['nazwa'];
        header('location: strona.php');
        exit();
    }else{
        echo "Nie udało się zalogować!<br>";
    }
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logowanie</title>
</head>
<body>
<h1>Zaloguj się</h1>
<form action="http://localhost/14.php" method="post">
    <label>Login:<br><input type="text" name="nazwa"><br></label>
    <label>Hasło<br><input type="password" name="hasło"><br></label>
    <label><input type="submit" value="Zaloguj się!"></label>

</form>
</body>
</html>
