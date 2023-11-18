<?php
require_once(__DIR__ ."/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

if(isset($_POST["REGISTRAR"])){
    require_once(__DIR__ ."/Process/CreateMascota.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Mascotas</title>
</head>
<body>
    <h1>Registro de Mascotas</h1>
    <form action="" method="post">
        <label for="nombre">Nombre de la mascota:</label>
        <input type="text" name="nombre" required><br>
        <label for="raza">Raza de la mascota:</label>
        <input type="text" name="raza" required><br>
        <input type="submit" value="Registrar" name="REGISTRAR">
    </form>
</body>
</html>
