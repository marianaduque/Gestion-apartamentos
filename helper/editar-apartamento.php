<?php
include_once("../model/Apartamento.php");
session_start();
$meses = $_POST['meses'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];
$habitable = $_POST['habitable'];
$juridico = $_POST['juridico'];
$idApartamento = $_POST['idApartamento'];

function editApartamento($meses, $imagen, $descripcion, $habitable, $juridico, $idApartamento){
  $factura = new Apartamento();
  $login = $factura->editApartamento($meses, $imagen, $descripcion, $habitable, $juridico, $idApartamento);
  return header('Location: ../views/apartamentos.php');
}
editApartamento($meses, $imagen, $descripcion, $habitable, $juridico, $idApartamento);
?>