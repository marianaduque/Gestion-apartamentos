<?php
include_once "Database.php";
class Propietario extends Database {

  public function __construct(){
    parent::__construct();
  }

  public function getPropietarios(){
    $resultado = $this->conexion_db->query('SELECT * FROM propietarios');
    $propietarios = $resultado->fetch_all(MYSQLI_ASSOC);
    return $propietarios;
  }

   public function loginAdmin($email, $pass){
    $resultado = $this->conexion_db->query('SELECT * FROM administradores WHERE email = "'.$email.'" AND password = "'.$pass.'"');
    $admin = $resultado->fetch_all(MYSQLI_ASSOC);
    return $admin;
   }
}
?>