<?php
include_once "Database.php";
class Factura extends Database {

  public $idApartamento;
  public $idAdministrador;
  public $valor;
  public $fecha;

  public function __construct(){
    parent::__construct();
  }

  public function getInfoFacturas(){
    $resultado = $this->conexion_db->query('SELECT * FROM facturas');
    $facturas = $resultado->fetch_all(MYSQLI_ASSOC);
    return $facturas;
  }

  public function addFactura(){
    $resultado = $this->conexion_db->query('INSERT INTO facturas VALUES("", '.$this->idApartamento.', '.$this->idAdministrador.', '.$this->valor.', "'.$this->fecha.'");');
    return $facturas;
  }
}

?>