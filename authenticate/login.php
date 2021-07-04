<?php
include_once("../model/Propietario.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

function login($email, $pass){
  $p = new Propietario();
  $login = $p->loginAdmin($email, $pass);
  print_r($login);
  if(count($login) == 0){
    $_SESSION['loggedin'] = "N";
    return header('Location: ../');
  }
  $_SESSION['idAdministrador'] = $login[0]['idAdministrador'];
  $_SESSION['email'] = $login[0]['email'];
  $_SESSION['loggedin'] = "S";

  return header('Location: ../views/apartamentos.php');
}
login($email, $password);
?>