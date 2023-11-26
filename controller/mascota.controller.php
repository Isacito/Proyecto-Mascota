<?php
require_once(__DIR__ ."/../Model/Pets.model.php");
require_once(__DIR__ ."/conexion.php");

class PetController extends Connection{
    public function create(Pets $pets){
        $mysqli = $this -> connect();
        $name = $pets->name;
        $Date = $pets->birthDate;
        $foto = null;
        $User_id = 1;
        $TipoMascota_id = 1;
        $Raza_id = 1;
        $sql = "INSERT INTO mascota (nombre, FechaNacimiento, foto, User_id, TipoMascota_id, Raza_id) VALUES ('$name', '$Date', 'null', '1','1','1')";
        $mysqli->query($sql);
        $mysqli->close();
    }

    public function Leer(){
        $mysqli = $this -> connect();
        $sql = "SELECT id, nombre, fechaNacimiento FROM mascota";
        $result = $mysqli->query($sql);
        $petss = [];
        while ($row=$result->fetch_assoc()){
            $pet = new Pets();
            $pet->id = $row['id'];
            $pet->name = $row['nombre'];
            $pet->birthDate = $row['fechaNacimiento'];
            $petss[] = $pet;
        }
        return $petss;
    }

    public function Update(Pets $pets){
        $mysqli = $this->connect();
        $id = $pets->id;
        $name = $pets->name;
        $fecha = $pets->birthDate;
        $foto = null;
        $User_id = 1;
        $TipoMascota_id = 1;
        $Raza_id = 1;
        $sql = "UPDATE mascota SET nombre='$name' WHERE id='$id', fechaNacimiento='$fecha'";
        $mysqli->query($sql);
        $mysqli->close();
    }

    public function delete($id){
        $mysqli = $this->connect();
        $sql = "DELETE FROM mascota WHERE id='$id'";
        $mysqli->query($sql);
        $mysqli->close();
    }
}