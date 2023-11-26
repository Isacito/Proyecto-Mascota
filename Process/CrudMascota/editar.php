<?php
require_once(__DIR__ ."/../../controller/mascota.controller.php");

$mascotaController = new PetController;
$modeloMascota = new Pets;
$modeloMascota = $_POST["IDActu"];
$modeloMascota = $_POST["NombrEACTU"];
$modeloMascota = $_POST["FechaActu"];
$mascotaController->Update($modeloMascota);

?>