<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <title>Intra Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="row text-center login-page">
        <div class="col-md-12 login-form">
          <form action="authenticate/login.php" method="post">
            <div class="row">
              <div class="col-md-12 login-form-header">
                <p class="login-form-font-header">Gestión de Apartamentos</p>
                <p></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 login-from-row">
                <input
                  name="email"
                  type="text"
                  placeholder="email"
                  required
                  class="form-control"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 login-from-row">
                <input
                  name="password"
                  type="password"
                  placeholder="Contraseña"
                  required
                  class="form-control"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 login-from-row">
                <button class="btn btn-primary">Ingresar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
