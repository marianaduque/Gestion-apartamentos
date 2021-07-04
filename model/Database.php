<?php

class Database{

  protected $conexion_db;

  public function __construct(){
      $this->conexion_db = new mysqli("localhost", "root", "", "apartamentosdb");
      if( $this->conexion_db->connect_errno) {
        echo "Fallo al conectar a MySQL:" . $this->conexion_db->connect_error;
        return;
      }
      $this->conexion_db->set_charset("utf8");
  }

}

?>