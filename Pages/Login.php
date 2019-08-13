<?php 
  include_once 'Registrosphp/funciones.php';
  include_once 'Registrosphp/user.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Creative Tim">
  <title>Login Universidad Politécnica de Tecámac</title>
  <!-- Favicon -->
  <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="assets/css/argon.css?v=1.0.0" rel="stylesheet">
    
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
          <img src="assets/img/brand/uptb.png" width="150px" height="100px" />
        <?php 
          if (isset($mensError)) {
            echo "<div class='alert alert-warning' role='alert'>";
            echo "<span class='alert-inner--icon'><i class='ni ni-bell-55'></i></span>";
            echo "<span class='alert-inner--text'><strong>Warning!</strong> ".$mensError." </span>";
            echo "</div>";
          }else if (isset($errorRegis)) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
            echo "<span class='alert-inner--icon'><i class='ni ni-notification-70'></i></span>";
            echo "<span class='alert-inner--text'><strong>Warning!</strong>".$errorRegis."</span>";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
            echo "<span aria-hidden='true'>&times;</span>";
            echo "</button>";
            echo "</div>";
          }else if (isset($mensExito)) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
            echo "<span class='alert-inner--icon'><i class='ni ni-satisfied'></i></span>";
            echo "<span class='alert-inner--text'><strong>Success!</strong>".$mensExito."</span>";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
            echo "<span aria-hidden='true'>&times;</span>";
            echo "</button>";
            echo "</div>";
          }
      ?>
        </div>
        
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Bienvenido!</h1>
            </div>
            <!--Modal-->
            <!--Fin Modal-->
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100 ">
       <svg x="0" y="0" viewBox="300 20 10 250" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 20 25600 100 0 300"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5 text-center">
              <img src="assets/img/brand/colmillos.png" class="navbar-brand-img" width="150px" height="150px">
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>¡Bienvenido!</small>
              </div>
              <form role="form" action="index.php" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-badge"></i></span>
                    </div>
                    <input class="form-control" placeholder="Alias/Correo Electronico/Telefono" type="text" name="correo" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password" name="contraseña">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted" style="font-size: 13.5px !important;">Recuerdame</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" value="submit" name="inicio" class="button yellow"><div class="light"></div>Iniciar Sesion</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="Pages/RecuContra.php" class="text-white"><small style="font-size: 15px !important;">Olvide mi contraseña</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="Pages/Registro.php" class="text-white"><small style="font-size: 15px !important;">No tienes una Cuenta, Registrate!!</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.0.0"></script>
</body>
</html>