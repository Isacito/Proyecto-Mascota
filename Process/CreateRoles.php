<?php
require_once(__DIR__ ."/../controller/roles.controller.php");
$role = new RolesController();
$roleS = new Roles();
$validar = true;
$estado = true;

$roleS -> id = $_POST["rol"];
$roleS -> name = $_POST["username"];
if($validar){
    $estado = $role -> create($roleS);
    if($estado){
        echo "GUARDADO";
    } else{
        echo "ERROR";
    }
}