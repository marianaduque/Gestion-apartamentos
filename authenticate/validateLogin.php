<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == "N") {
  header("Location: /gestionApartamentos");
}
?>

