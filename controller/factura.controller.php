<?php
include_once("../model/Factura.php");

function getInfoFacturas(){
  $f = new Factura();
  return $f->getInfoFacturas();
}

?>