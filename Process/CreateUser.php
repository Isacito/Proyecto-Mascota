<?php
// require_once(__DIR__ ."/../controller/conexion.php");
require_once(__DIR__ ."/../controller/user.controller.php");

$user = new UserController();
$useR = new User();
$validar = true;
$status = true;

$useR->name = $_POST["name"];
$useR->username = $_POST["username"];
$useR->email = $_POST["email"];
$useR->password = (password_hash(($_POST['password']), PASSWORD_DEFAULT));

if ($useR->name == ""){
    $validar = false;
    $error["name"] = "VACIO";
}
if ($useR->username == ""){
    $validar = false;
    $error["username"] = "VACIO";
}
if ($useR->email == ""){
    $validar = false;
    $error["email"] = "VACIO";
}
if ($useR->password == ""){
    $validar = false;
    $error["password"] = "VACIO";
}

if ($validar){
    if($status = $user->create($useR)){
        if($status){
            echo "GUARDADO EXITOSAMENTE";
        } else{
            echo "ERROR AL GUARDAR LOS DATOS DEL USUARIO";
        }
    }
}
?>