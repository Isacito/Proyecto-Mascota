<?php
require_once(__DIR__ ."/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Mascotas</title>
</head>
<body>
    <header>
        <h2 class="Titulo"> Bienvenido al sistema </h2>
        <nav class="menu">
            <a href="#"> USUARIO </a>
            <a href="/vacunas.php"> VACUNAS </a>
            <a href="#">CERRAR</a>
        </nav>
    </header>
    <h1>Registro de Mascotas</h1>
    <form action="" method="post" class="Mascota1">
        <label for="nombre">Nombre de la mascota:</label>
        <input type="text" name="nombre" required><br>
        <label for="fecha">Fecha de Nacimiento:</label>
        <input type="date" name="fecha" required><br>
        <button type="submit" class="button" name="REGISTRAR">Registrar</button>
        <?php
            if (isset($_POST["REGISTRAR"]) && !empty($_POST["nombre"]) && !empty($_POST["fecha"])) {
                require_once __DIR__ . "/Process/CreateMascota.php";
            }
        ?>
    </form>
    <form action="" method="post" class="Mascota2">
        <label for="id">Actualizar ID:</label>
        <input type="text" name="IDActu" required><br>
        <label for="nombre">Actualizar Mascota:</label>
        <input type="text" name="NombrEACTU" id="">
        <label for="fecha">Actualizar Fecha:</label>
        <input type="date" name="FechaActu" required><br>
        <button type="submit" class="button" name="ACTUALIZAR">Actualizar</button>
        <?php
            if (isset($_POST["ACTUALIZAR"]) && !empty($_POST["NombrEACTU"]) && !empty($_POST["FechaActu"])) {
                require_once __DIR__ . "/Process/CrudMascota/editar.php";
            }
        ?>
    </form>
    <form action="" method="post" class="Mascota3">
        <label for="nombre">ID Mascota:</label>
        <input type="text" name="id" required><br>
        <button type="submit" class="button" name="ELIMINAR">Eliminar</button>
        <?php
            if (isset($_POST["ELIMINAR"]) && !empty($_POST["id"])){
                require_once __DIR__ . "/Process/CrudMascota/eliminar.php";
            }
        ?>
    </form>
    <table class="table">
        <form action="" method="post" class="table">
            <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>Mascota</th>
                </tr>
                <?php
                require_once __DIR__ . "/controller/mascota.controller.php";
                $name = new PetController;
                $mostrar = $name -> Leer();
                ?>
                <?php foreach($mostrar as $Value): ?>
                <tr>
                    <td> <?php echo $Value->id?></td>
                    <td> <?php echo $Value->name?></td>
                    <td> <?php echo $Value->birthDate?></td>
                </tr>
                <?php endforeach ?>
            </thead>
        </form>
    </table>
</body>
</html>
<style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: rgb(159, 225, 236);
            background: linear-gradient(315deg, rgba(159, 225, 236, 1) 12%, rgba(92, 0, 81, 1) 25%, rgba(135, 0, 142, 1) 50%, rgba(111, 64, 125, 1) 83%, rgba(255, 255, 255, 1) 100%);
        }

        header {
            width: 100%;
            background: #000000;
            padding: 20px 50px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .menu {
            display: flex;
            gap: 2vw;
        }

        a {
            color: aqua;
            text-decoration: none;
        }

        a:hover {
            color: blue;
        }

        h1 {
            margin-left: 6%;
        }

        form {
            position: relative;
            right: 30%;
            margin: auto;
            width: 30%;
            border: solid black 1px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
            border-radius: 10px;
            display: grid;
            text-align: center;
            background: black;
            margin-top: 20px;
        }

        .table {
            border: solid 1px rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 14px;
            table-layout: fixed;
            border-collapse: collapse;
            margin: auto;
            margin-top: 20px;
            width: 80%;
        }

        thead {
            background: rgba(243, 140, 210, 0.4);
            cursor: pointer;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            font-weight: 700;
            text-transform: uppercase;
        }

        thead tr:hover {
            background: rgba(243, 140, 210, 0.4);
        }

        .button {
            width: 40%;
            height: 35px;
            margin-top: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            background: chartreuse;
        }

        .button:hover {
            background-color: darkgreen;
        }

        input {
            margin-top: 10px;
            width: 80%;
            height: 30px;
            font-size: 16px;
            text-align: center;
        }
</style>