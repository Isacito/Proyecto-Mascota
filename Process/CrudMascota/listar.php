<?php
require_once(__DIR__ ."/../controller/conexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM mascota WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="/./Process/editar.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="data" placeholder="FechaN" value="<?= $row['data']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>