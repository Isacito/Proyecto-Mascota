<?php
require_once(__DIR__ ."/../Proyecto_mascotas/controller/conexion.php");
$mascota = new mascotaController();
$mascotas = new Pets();
$validar = true;
$estado = true;

$mascotas -> usuario = $_POST["usuario"];
$mascotas -> nombre = $_POST["nombre"];
$mascotas -> fechaN = $_POST["fechaN"];
$mascotas -> raza = $_POST["raza"];
if($validar){
    $estado = $mascota -> create($mascotas);
    if($estado){
        echo "Guardado exitoso";
    }else{
        echo "Fatal";
    }
}
?>