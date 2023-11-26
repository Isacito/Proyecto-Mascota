<?php
require_once(__DIR__ ."/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if(isset($_POST["REGISTRAR"])){
    require_once(__DIR__ ."/Process/CreateUser.php");

    if($_POST["REGISTRAR"]){
        echo "REGISTRO EXITOSO";
    }else{
        echo "ERROR AL REGISTRAR";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles_check.css">
</head>
<body>
    <div class="formulario">
        <form action="" method="post">
            <img src="./img/icon.png" alt="">
            <label for="name">Nombre:</label>
            <input type="text" name="name">
            <br>
            <label for="name">Rol:</label>
            <input type="number" name="rol">
            <br>
            <label for="username">Usuario:</label>
            <input type="text" name="username">
            <br>
            <label for="email">Correo:</label>
            <input type="email" name="email">
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" name="password">
            <br>
            <input type="submit" name="REGISTRAR" value="Registrar" class="button">
            <a href="/login.php">INICIAR SECCION</a>
        </form>
    </div>
</body>
</html>
<style>
    a{
        text-decoration: none;
        color: black;
        background-color:limegreen;
        border: 40px;
        border-radius: 10px;
        text-align: center;
        width: 70%;
        margin-left: 20px;
    }
    a:hover{
        background-color: darkgreen;
    }
</style>