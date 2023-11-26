<?php
require_once(__DIR__ . "/../../controller/vacuna.controller.php");

$id = $_POST["id"];
$vacunaController = new VaccineController;
$vacunaController->delete($id);

