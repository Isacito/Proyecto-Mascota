<?php
require_once(__DIR__ ."/../../controller/mascota.controller.php");

$id = $_POST["id"];
$mascotaController = new PetController;
$mascotaController->delete($id);
?>