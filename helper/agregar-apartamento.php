<?php
include_once("../model/Apartamento.php");
session_start();
$meses = $_POST['meses'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];
$habitable = $_POST['habitable'];
$juridico = $_POST['juridico'];
$idPropietario = $_POST['idPropietario'];

function addApartamento($meses, $imagen, $descripcion, $habitable, $juridico, $idPropietario){
  $factura = new Apartamento();
  $login = $factura->addApartamento($meses, $imagen, $descripcion, $habitable, $juridico, $idPropietario);
  return header('Location: ../views/apartamentos.php');
}
addApartamento($meses, $imagen, $descripcion, $habitable, $juridico, $idPropietario);
?>