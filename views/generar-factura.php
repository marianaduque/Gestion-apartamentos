<?php
include_once("../controller/propietarios.controller.php");
$propietarios = getInfoPropietarios();
$idApartamento = $_GET["idApartamento"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Gestion Apartamentos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles/login.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="https://image.flaticon.com/icons/png/512/1669/1669669.png" width="80" height="80"
        class="d-inline-block align-top" alt="" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="./facturas.php">Facturas</a>
          </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row justify-content-md-center">
      <h1 class="mb-3">Generar Factura</h1>
      <form class="col-md-8" action="../helper/add-factura.php" method="POST">
        <input type="hidden" name="idApartamento" value="<?php echo $idApartamento; ?>">
        <div class="form-group row">
          <label for="valor" class="col-sm-2 col-form-label">Valor</label>
          <div class="col-sm-10">
            <input type="number" name="valor" class="form-control" id="valor" placeholder="Valor" />
          </div>
        </div>
        <div class="form-group row">
          <label for="date" class="col-sm-2 col-form-label">Fecha cobro</label>
          <div class="col-sm-10">
            <input type="date" name="fecha" class="form-control" id="inputPassword3" placeholder="Date" />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>