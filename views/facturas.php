<?php
include_once("../controller/factura.controller.php");
$facturas = getInfoFacturas();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>Gestion Apartamentos</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/login.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img
          src="https://image.flaticon.com/icons/png/512/1669/1669669.png"
          width="80"
          height="80"
          class="d-inline-block align-top"
          alt=""
        />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./apartamentos.php"> Apartamentos </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./propietarios.php">Propietarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./facturas.php">facturas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <h1 class="mb-3">Lista Facturas</h1>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">ID Apartamento</th>
              <th scope="col">Valor</th>
              <th scope="col">Fecha</th>
            </tr>
          </thead>
          <tbody>
              <?php
                for($i = 0; $i < count($facturas); $i++){
                  echo "<tr>";
                  echo "<td>".$facturas[$i]['idFactura']."</td>";
                  echo "<td>".$facturas[$i]['idApartamento']."</td>";
                  echo "<td>".$facturas[$i]['valor']."</td>";
                  echo "<td>".$facturas[$i]['fecha']."</td>";
                  echo "</tr>";
                }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
