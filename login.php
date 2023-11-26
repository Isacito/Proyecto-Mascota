<?php
require_once(__DIR__ ."/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
require_once(__DIR__ ."/controller/conexion.php");

if(isset($_POST["btn"])){
    $mysqli = new Connection;
    $mysqli = $mysqli->connect();

    $username = $mysqli->real_escape_string($_POST["usuario"]);
    $password = $mysqli->real_escape_string($_POST["password"]);
    $sql = ("SELECT * FROM user WHERE username = '$username'");
    $result = $mysqli -> query($sql);
    if ($result -> num_rows > 0) {
        $row = mysqli_fetch_array($result);
        $PassW = $row['passwor'];

        $ver = password_verify($password, $PassW);
        if($ver){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['rol'] = $row['Role_id'];
            header("location:register.php");
        }else{
            echo "FALLIDO, FALTA POR COMPLETAR";
        }
    }else{
        echo "USUARIO NO EXISTE";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles_login.css">
</head>
<body>
    <main>
        <div class="formulario">
            <form action="" method="post">
                <img src="./img/icon.png" alt="">
                <label for="usuario"> Usuario: </label><br>
                <input type="text" name="usuario" id="usuario"><br>
                <label for="password">Password: </label><br>
                <input type="password" name="password" id="password"><br>
                <button class="button" name="btn" type="submit">INICIAR</button>
            </form>
        </div>
    </main>
</body>
</html>