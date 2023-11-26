<?php
require_once(__DIR__ . "/../../controller/vacuna.controller.php");

$vacunaController = new VaccineController;

$modeloVacuna = new Vaccine;
$modeloVacuna->id = $_POST["IdActu"];
$modeloVacuna->name = $_POST["NombreActu"];
$vacunaController->update($modeloVacuna);
