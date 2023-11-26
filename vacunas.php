<?php
require_once(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Vacuna</title>
</head>

<body>
    <header>
        <h2>Formulario de Vacuna</h2>
        <div>
            <a href="/register.php">MASCOTA</a>
            <a href="/principal.php">CERRAR</a>
        </div>
    </header>
    <form action="" method="post" class="formu">
        <label for="nombre">Nombre de la Vacuna:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit" name="agregarVacuna">Agregar Vacuna</button>
        <?php
        if (isset($_POST["agregarVacuna"]) && !empty($_POST["nombre"])) {
            require_once __DIR__ . "/Process/CreateVaccine.php";
        }
        ?>
    </form>
    <form action="" method="post" class="formulario">
        <label for="nombre">Actualizar Vacuna:</label>
        <input type="text" id="nombre" name="IdActu" required><br>
        <input type="text" id="nombre" name="NombreActu" required>
        <button type="submit" name="ActuVacuna">Actualizar Vacuna</button>
        <?php
        if (isset($_POST["ActuVacuna"]) && !empty($_POST["NombreActu"])) {
            require_once __DIR__ . "/Process/CrudVacuna/editar.php";
        }
        ?>
    </form>
    <form action="" method="post" class="formulario2">
        <label for="nombre">ID Vacuna:</label>
        <input type="text" id="nombre" name="id" required>
        <button type="submit" name="EliminarVacuna">Eliminar Vacuna</button>
        <?php
        if (isset($_POST["EliminarVacuna"]) && !empty($_POST["id"])) {
            require_once __DIR__ . "/Process/CrudVacuna/eliminar.php";
        }
        ?>
    </form>
    <table class="table">
        <form action="" method="post" class="table">
            <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>Vacuna</th>
                </tr>
                <?php
                require_once __DIR__ . "/controller/vacuna.controller.php";
                $name = new VaccineController;
                $mostrar = $name->readAll();
                ?>
                <?php foreach ($mostrar as $Value) : ?>
                    <tr>
                        <td> <?php echo $Value->id ?></td>
                        <td> <?php echo $Value->name ?></td>
                    </tr>
                <?php endforeach ?>
            </thead>
            <?php
            ?>
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
            text-align: center;
            background: #000000;
            padding: 20px 0;
            color: #fff;
        }

        header div {
            margin-top: 10px;
        }

        header div a {
            padding: 0 20px;
            color: aqua;
            text-decoration: none;
        }

        header div a:hover {
            color: blue;
        }

        h2 {
            font-size: 25px;
        }

        form {
            position: relative;
            margin: auto;
            width: 50%;
            border: solid black 1px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
            border-radius: 10px;
            display: grid;
            text-align: center;
            background: black;
            margin-top: 20px;
        }

        label {
            font-size: 20px;
            color: #fff;
        }

        input {
            margin-top: 10px;
            width: 80%;
            height: 30px;
            font-size: 16px;
        }

        button {
            margin-top: 15px;
            width: 40%;
            height: 35px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            background: chartreuse;
        }

        button:hover {
            background-color: darkgreen;
        }

        .table {
            margin: auto;
            border: solid 1px rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 14px;
            table-layout: fixed;
            border-collapse: collapse;
            margin-top: 20px;
            width: 80%;
        }

        thead {
            background: rgba(243, 140, 210, 0.4);
            cursor: pointer;
            height: 80px;
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
</style>