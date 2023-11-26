<?php
require_once(__DIR__ . "/../Model/vaccine.model.php");
require_once(__DIR__ . "/conexion.php");
class VaccineController extends Connection {

    public function create(Vaccine $vacuna) {

        $mysqli = $this->connect();
        $name = $vacuna->name;
        $sql = "INSERT INTO vacuna (nombre) VALUES ('$name')";
        $mysqli->query($sql);
        $mysqli->close();
    }

    public function readAll() {
        $mysqli = $this->connect();
        $sql = "SELECT id,nombre FROM vacuna";
        $result = $mysqli->query($sql);
        $vacunas = [];
        while ($row=$result->fetch_assoc()) {
            $vacuna = new Vaccine;
            $vacuna->id = $row['id'];
            $vacuna->name = $row['nombre'];
            $vacunas[] = $vacuna;
        }
        return $vacunas;
    }

    public function update(Vaccine $vacuna) {
        $mysqli = $this->connect();
        $id = $vacuna->id;
        $name = $vacuna->name;
        $sql = "UPDATE vacuna SET nombre='$name' WHERE id='$id'";
        $mysqli->query($sql);
        $mysqli->close();
    }

    public function delete($id) {
        $mysqli = $this->connect();
        $sql = "DELETE FROM vacuna WHERE id='$id'";
        $mysqli->query($sql);
        $mysqli->close();
    }
}

