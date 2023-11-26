<?php
require_once(__DIR__ ."/../Model/user.model.php");
require_once(__DIR__ ."/conexion.php");
class UserController extends Connection
{
    public function create(User $user){
        $mysqli = $this->connect();
        $name = $mysqli->real_escape_string($user->name);
        $password = $mysqli->real_escape_string($user->password);
        $username = $mysqli->real_escape_string($user->username);
        $email = $mysqli->real_escape_string($user->email);
        $sql = "INSERT INTO user (nombre, username, email, passwor, Role_id) VALUES ('$name','$username', '$email', '$password', 1)";
        $mysqli->query($sql);
    }
}
?>