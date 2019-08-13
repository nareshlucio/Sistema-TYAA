  <?php 
  include_once 'funciones.php';
  $con = conexion();
//----------------Recepcion de Datos del Formulario------------------
    $ape_P = mysqli_real_escape_string($con,$_POST['Apellido_P']);
    $ape_M = mysqli_real_escape_string($con,$_POST['Apellido_M']);
    $nombre = mysqli_real_escape_string($con,$_POST['nombre']);
    $alias = mysqli_real_escape_string($con,$_POST['alias']);
    $correo = mysqli_real_escape_string($con,$_POST['correo']);
    $pass = mysqli_real_escape_string($con,$_POST['contra']);
    $passHash = password_hash($pass, PASSWORD_BCRYPT);
    $numero = mysqli_real_escape_string($con,$_POST['num_tel']);
    $tip_usu = 2;
    if ($_POST["Genero"] === "Hombre") {
      $gen = $_POST["Genero"];
    }else
      $gen = $_POST["Genero"];
//-------------------------Fin del Bloque-----------------------------
//Fin del Bloque  
//Verificacion de usuario o correo elextronico existente
  if (isset($_POST['registrar'])) {
    $SqlC="SELECT Correo FROM usuarios WHERE Correo='$correo'";
    $SqlU="SELECT Alias FROM usuarios WHERE Alias='$alias'";
    if($resuC=mysqli_query($con,$SqlC))
      $numC = mysqli_num_rows($resuC);
    if($resuU=mysqli_query($con,$SqlU))
      $numU = mysqli_num_rows($resuU);
    if($numC>0)
      $MensCorreo = "Este Correo Electronico ya Existe con una Cuenta Relacionada";
    if($numU>0)
      $MensUsuario = "Este Alias ó Usuario ya Existe con una cuenta Ralacionada";
  }
    $Sql ="INSERT INTO usuarios (Apellido_P, Apellido_M, Nombre, Alias, Correo, Password, Telefono, Genero, Tipo_de_Usuario) VALUES ('".$ape_P."', '".$ape_M."', '".$nombre."', '".$alias."', '".$correo."', '".$passHash."', '".$numero."', '".$gen."', ".$tip_usu.");";
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Registro de Usuario</title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../../assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.php">
          <img src="../../assets/img/brand/uptb.png" white="100px" height="100px"/>
        </a>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
			       <?php 
                if(mysqli_query($con, $Sql)){
                  echo "<meta http-equiv='Refresh' content='0.0; URL=../../index.php'>";
                  $mensExito= "Registro con Exito!!!  Logeate :D";
                  $diruser = '../Users/'.$alias."/";
                  mkdir($diruser, 0755);
                } else{
                  echo "<meta http-equiv='Refresh' content='0.0; URL=../../index.php'>";
                  $errorRegis= "Ocurrio un Problema al Poder Registrarte Intentalo de Nuevo";
                }
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.0.0"></script>
</body>
<?php mysqli_close($con); ?>
</html>