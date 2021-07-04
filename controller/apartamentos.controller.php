<?php
include_once("../model/Apartamento.php");

function getInfoApartamentos(){
  $p = new Apartamento();
  return $p->getApartamentos();
}

function getApartamentoById($idApartamento){
  $p = new Apartamento();
  return $p->getApartamentoById($idApartamento);
}

?>