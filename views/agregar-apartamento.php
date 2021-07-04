<?php
include_once("../controller/propietarios.controller.php");
$propietarios = getInfoPropietarios();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Gestion Apartamentos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/login.css" />
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
      <h1 class="mb-3">Agregar Apartamento</h1>
      <form class="col-md-8" action="../helper/agregar-apartamento.php" method="POST">
        <input type="hidden" name="idApartamento" value="">
        <div class="form-group row input-content">
          <label for="valor" class="col-sm-3 col-form-label">Meses mora</label>
          <div class="col-sm-9">
            <input type="number" name="meses" class="form-control" id="valor" placeholder="Meses mora" value="" />
          </div>
        </div>
        <div class="form-group row input-content">
          <label for="imagen" class="col-sm-3 col-form-label">URL Imagen</label>
          <div class="col-sm-9">
            <input type="text" name="imagen" class="form-control" id="imagen" placeholder="URL imagen" value="" />
          </div>
        </div>
        <div class="form-group row input-content">
          <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
          <div class="col-sm-9">
            <textarea class="form-control" name="descripcion" id="descripcion" placeholder="descripcion"rows="2"></textarea>
          </div>
        </div>
        <div class="form-group row input-content">
          <label for="idPropietario" class="col-sm-3 col-form-label">Propietario</label>
          <div class="col-sm-9">
            <select class="form-control" aria-label="Default select example" id="idPropietario" name="idPropietario">
              <?php for ($i=0; $i < count($propietarios); $i++) { 
                  echo "<option value=".$propietarios[$i]['idPropietario'].">".$propietarios[$i]['nombre']."</option>";
              } ?>
            </select>
          </div>
        </div>
        <div class="form-group row input-content">
          <label for="habitable" class="col-sm-3 col-form-label">Habitada por el propietario</label>
          <div class="col-sm-9">
            <select class="form-control" aria-label="Default select example" id="habitable" name="habitable">
              <option value="S">SI</option>
              <option value="N">NO</option>
            </select>
          </div>
        </div>
        <div class="form-group row input-content">
          <label for="juridico"  class="col-sm-3 col-form-label">Proceso Juridico</label>
          <div class="col-sm-9">
            <select class="form-control" aria-label="Default select example" id="juridico" name="juridico">
              <option value="S">SI</option>
              <option value="N">NO</option>
            </select>
          </div>
        </div>
        <div class="form-group row input-content">
          <div class="col-sm-9">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>