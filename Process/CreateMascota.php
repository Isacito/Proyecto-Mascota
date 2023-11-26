<?php
require_once(__DIR__ ."/../controller/mascota.controller.php");

$modeloMascota = new Pets;
$mascotaController = new PetController;

$modeloMascota->name = $_POST["nombre"];
$modeloMascota->birthDate = $_POST["fecha"];
$mascotaController->create($modeloMascota);

