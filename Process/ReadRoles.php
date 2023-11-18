<?php
require_once(__DIR__ ."/../controller/roles.controller.php");
$leer = new RolesController();
$roles = $leer -> read();
foreach($roles as $cargo){
    echo "<br>" .  "id"  .  $cargo['id']  . "nombre" .  $cargo['nombre'];
};