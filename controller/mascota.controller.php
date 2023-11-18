<?php
require_once(__DIR__ ."/../Model/Pets.model.php");
require_once(__DIR__ ."/conexion.php");
class RolesController extends Connection{

    public function create(Pets $pets){
        $mysqli = $this->connect();
        $name = $mysqli->real_escape_string($pets->name);
        $usuario= $mysqli->real_escape_string($pets->usuario);
        $fechaN= $mysqli->real_escape_string($pets->fechaN);
        $raza= $mysqli->real_escape_string($pets->raza);
        $auto_increm = "SELECT * FROM mascota WHERE id";
            $result = $mysqli->query("$auto_increm");
            $columns = $result->num_rows;
            $columns++;
        $sql = "INSERT INTO mascotas (id, nombre, usuario, raza, fechaN) VALUES ('$name','$fechaN', '$usuario', '$raza', )";
        return $mysqli;
        $mysqli->close();
    }
}