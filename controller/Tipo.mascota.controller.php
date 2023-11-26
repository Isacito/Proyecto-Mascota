<?php 
require_once(__DIR__ ."/../Model/PetType.model.php");
require_once(__DIR__ ."/conexion.php");

class TipoMascota extends Connection{
    public function read(): array{
        $mysqli = $this->connect();
        $array = [];
        $sql = "SELECT id, nombre FROM tipomascota";
        $result = $mysqli->query($sql);
        while($row = $result->fetch_assoc()){
            $Typee = new PetType;
            $Typee->id = $row["id"];
            $Typee->name = $row["nombre"];
            $array[] = $Typee;
        }
        return $array;
    }
}