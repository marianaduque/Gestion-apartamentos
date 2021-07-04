<?php
include_once("../authenticate/validateLogin.php");
include_once("../controller/apartamentos.controller.php");
$apartamentos = getInfoApartamentos();
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
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"> Apartamentos </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./propietarios.php">Propietarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./facturas.php">Facturas</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div>
        <h1 class="mb-3">Apartamentos</h1>
        <a href="./agregar-apartamento.php">
          <button type="button"  class="btn btn-primary">Agregar apartamento</button>
        </a>
      </div>
      <div class="row">
        <?php
          for ($i=0; $i < count($apartamentos); $i++) { 
        ?>
        <div class="card" style="width: 22rem; margin: 20px;">
          <img class="card-img-top" src="<?php echo $apartamentos[$i]['urlImagen']; ?>" alt="Apartamento">
          <div class="card-body">
            <h5 class="card-title">ID Apartamento: <?php echo $apartamentos[$i]['idApartamento']; ?></h5>
            <p class="card-text"><?php echo $apartamentos[$i]['descripcion']; ?></p>
            <p><strong>Id propietario: </strong> <?php echo $apartamentos[$i]['idPropietario']; ?></p>
            <a href="<?php echo "./generar-factura.php?idApartamento=".$apartamentos[$i]['idApartamento']."" ?>"
              class="btn btn-primary">
                Generar Factura
            </a>
            <a  href="<?php echo "./editar-apartamento.php?idApartamento=".$apartamentos[$i]['idApartamento']."" ?>" 
                class="btn btn-primary">Editar</a>
          </div>
        </div>
        <?php
           }
        ?>
      </div>
    </div>
  </body>
</html>
