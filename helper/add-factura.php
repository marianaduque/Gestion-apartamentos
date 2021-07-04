<?php
include_once("../model/Factura.php");
session_start();
$valor = $_POST['valor'];
$fecha = $_POST['fecha'];
$idApartamento = $_POST['idApartamento'];

function addFactura($valor, $fecha, $idApartamento){
  $factura = new Factura();
  $factura->idApartamento = $idApartamento;
  $factura->idAdministrador = $_SESSION['idAdministrador'];
  $factura->valor = $valor;
  $factura->fecha = $fecha;
  $login = $factura->addFactura();
  return header('Location: ../views/apartamentos.php');
}
addFactura($valor, $fecha, $idApartamento);
?>