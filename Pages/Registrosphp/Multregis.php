<?php 
  include_once 'funciones.php';
  include_once 'user.php';
  include_once 'SesionUsu.php';
  $Sesion = new SesionUsuario();
  $Usuario = new User();
  $con = conexion();
  $conexion = new BD();
  $aliasusu =$Sesion->getCurrentUser();
  $Sqlinfo= "SELECT * FROM usuarios WHERE Alias ='".$aliasusu."'";
  $resul=mysqli_query($con, $Sqlinfo);
 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Registro de Usuario</title>
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
        <a class="navbar-brand" href="../index.html">
          <img src="../../assets/img/brand/white.png" />
        </a>
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
                //--------------------------------Actualizacion de Datos--------------------------------------
  if (isset($_POST['actualizar'])){
    $Alias = $_POST['Ali'];
    $mail = $_POST['e-mail'];
    $edad = $_POST['Edad'];
    $tel = $_POST['Tel'];
    $ape_p = $_POST['ape_p'];
    $ape_m = $_POST['ape_m'];
    $nombre = $_POST['nom'];
    $ocupacion = $_POST['ocupacion'];
    $direccion = $_POST['dire'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $codigo = $_POST['cod'];
    $biografia = $_POST['bio'];

    if ($_FILES['perfil']['error']>0) {
      echo "Ocurrio algo al subir el archivo";
    }else{
      $archi_permitidos = array("image/gif", "image/png", "image/jpeg", "image/jpg");
      $max_alma_mb = 10000;
      if (in_array($_FILES['perfil']['type'], $archi_permitidos) && $_FILES['perfil']['size'] <= $max_alma_mb * 1024) {
        $ruta = "Users/$Alias/";
        $archivo = $ruta.$_FILES["perfil"]["name"];
      while($fila = mysqli_fetch_array($resul)){
        $_SESSION['Id-usuario'] = $fila['Id_usuario'];
        if(!file_exists($archivo)){
          $actuinfo="UPDATE usuarios SET Apellido_P='".$ape_p."', Apellido_M='".$ape_m."', Nombre='".$nombre."', Alias='".$Alias."', Correo='".$mail."', Telefono='".$tel."', Direccion='".$direccion."', Ciudad='".$ciudad."', Pais='".$pais."', CodPostal='".$codigo."', Biografia='".$biografia."', Edad=".$edad.", Ocupacion='".$ocupacion."', Avatar='".$archivo."' WHERE Id_usuario=".$fila['Id_usuario'].";";
          if (mysqli_query($con, $actuinfo)) {
            $move_imagen = @move_uploaded_file($_FILES["perfil"]["tmp_name"], "../".$archivo);
            echo "<meta http-equiv='Refresh' content='0.0; URL=ActuPerfil.php'>";
          }
        }
      }
      }else{
        echo "El archivo no es una imagen ó excede el tamaño minimo";
      } 
    }
  }
  //--------------------------Seccion de cambion de contraseña----------------------------------
    if(isset($_POST['savecambios'])){
    $conActual = $_POST['contraActual'];
    $nuvContra = $_POST['contraNueva'];
    $contraRep = $_POST['contraRep'];
    if ($nuvContra === $contraRep) {
      while ($fila = mysqli_fetch_array($resul)) {
        $_SESSION['Id-usuario'] = $fila['Id_usuario'];
        $id = $fila['Id_usuario'];
        if (password_verify($nuvContra, $fila['Password'])) {
          $passhas=password_hash($nuvContra, PASSWORD_BCRYPT);
          $actualizarDatos = "UPDATE usuarios SET Password= :pass WHERE Id_usuario= :id";
          $query= $con->conexionPDO()->prepare($actualizarDatos);
          $query->bindParam(':pass', $nuvContra, PDO::PARAM_STRING);
          $query->bindParam(':id', $id, PDO::PARAM_INT);
          $query->execute();
          $mensexit = "Se hizo el cambio de contraseña correctamente!!! :D";
          echo "<meta http-equiv='Refresh' content='0.0; URL=ActuPerfil.php'>";
        }
      }
    }else {
      $menserror = "Las Contraseñas no coninciden, Intenta de Nuevo :(";
    }
  }
  //--------------------------------------------------------------------------------------------
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

</html>