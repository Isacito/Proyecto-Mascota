<?php
require_once(__DIR__ ."/../Model/roles.model.php");
require_once(__DIR__ ."/conexion.php");
class RolesController extends Connection
{
    public function create(Roles $role){
        $mysqli = $this -> connect();
        $id = $mysqli -> real_escape_string($role->id);
        $name = $mysqli -> real_escape_string($role->name);
        $sql = "INSERT INTO Role (id, nombre) VALUES ($id, '$name')";
        return $mysqli -> query($sql);
    } 
    public function update($id,$new){
        $mysqli = $this -> connect();
        $new = $mysqli -> real_escape_string($new);
        $sql = "UPDATE Role SET nombre='$new' WHERE id=$id";

        if($mysqli -> query($sql)){
            echo 'Actualizado';
        } else{
            echo 'No se pudo actualizar el registro';
        }
        $mysqli->close();
    }
    public function read(){
        $mysqli = $this -> connect();
        $sql = "SELECT id, nombre FROM Role";
        $result = $mysqli -> query($sql);
        $roles = [];
        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                $roles[] = $row;
            }
        }
        $mysqli -> close();
        return $roles;
    }
}
    // public function create(){
    //     $mysqli = $this->connect();
    //     // $id = $mysqli->real_escape_string($roles->id);
    //     // $name = $mysqli->real_escape_string($roles->name);
    //     $sql = "SELECT nombre FROM role WHERE id = 2 ";
    //     $result = $mysqli->query($sql);
    //     // $mostrar = $result->fetch_all();
    //     // print_r($mostrar);
    //     // $mysqli->close();

?>

