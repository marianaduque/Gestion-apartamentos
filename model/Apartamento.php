<?php
include_once "Database.php";
class Apartamento extends Database {

  public function __construct(){
    parent::__construct();
  }

  public function getApartamentos(){
    $resultado = $this->conexion_db->query('SELECT * FROM apartamentos');
    $apartamentos = $resultado->fetch_all(MYSQLI_ASSOC);
    return $apartamentos;
  }

  public function getApartamentoById($idApartamento){
    $resultado = $this->conexion_db->query('SELECT * FROM apartamentos WHERE idApartamento = '.$idApartamento.'');
    $apartamentos = $resultado->fetch_all(MYSQLI_ASSOC);
    return $apartamentos;
  }

  public function editApartamento($meses, $imagen, $descripcion, $habitable, $juridico, $idApartamento){
    $resultado = $this->conexion_db->query('UPDATE apartamentos SET habitablePropietario = "'.$habitable.'", mesesMora = "'.$meses.'", procesoJuridico = "'.$juridico.'",
    descripcion = "'.$descripcion.'", urlImagen = "'.$imagen.'" WHERE idApartamento = '.$idApartamento.'');
    return $resultado;
  }

  public function addApartamento($meses, $imagen, $descripcion, $habitable, $juridico, $idPropietario){
    $resultado = $this->conexion_db->query('INSERT INTO apartamentos VALUES ("", '.$idPropietario.', "'.$habitable.'", '.$meses.', "'.$juridico.'", "'.$descripcion.'", "'.$imagen.'")');
    return $resultado;
  }
}

?>