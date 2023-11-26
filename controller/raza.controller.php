<?php
require_once(__DIR__ ."/../Model/raza.model.php");
require_once(__DIR__ ."/conexion.php");

class RazaController extends Connection{
    public function read(): array{
        $mysqli = $this->connect();
        $array = [];
        $sql = "SELECT id, nombre FROM raza";
        $result = $mysqli->query($sql);
        while($row = $result->fetch_assoc()){
            $raza = new PetType;
            $raza->id = $row["id"];
            $raza->name = $row["nombre"];
            $array[] = $raza;
        }
        return $array;
    }
}