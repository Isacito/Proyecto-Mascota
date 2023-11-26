<?php
require_once(__DIR__ . "/../controller/vacuna.controller.php");

$modeloVacuna = new Vaccine;
$vacunaController = new VaccineController;

$modeloVacuna->name = $_POST["nombre"];

$vacunaController->create($modeloVacuna);

?>