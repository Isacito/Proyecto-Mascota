<?php
require_once(__DIR__ ."/../controller/conexion.php");

$id = null;
$name = $_POST['name'];
$birthDate = $_POST["Date"];

$sql = "INSERT INTO mascota VALUES ('$id', '$name', '$birtDate')";
$query = mysqli_query($con, $sql);

if($query){
    echo "Registro guardado";
}else{
    echo "Error al guardar el registro";
}
