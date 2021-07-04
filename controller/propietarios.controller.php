<?php
include_once("../model/Propietario.php");

function getInfoPropietarios(){
  $p = new Propietario();
  return $p->getPropietarios();
}
?>