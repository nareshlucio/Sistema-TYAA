<?php 
include_once 'funciones.php';
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';*/

$con = conexion();
  $Asesor= $_POST['Asesor'];
  $Matri= $_POST['Matricula'];
  $Materia = $_POST['Materia'];
  $Carrera = $_POST['Carrera'];
  $Grupo= $_POST['Grupo'];
  $Mot= $_POST['Motivo'];
  $Periodo = $_POST['Peri'];
  $Cuatri= $_POST['Cuatri'];
  $Par= $_POST['Par'];
  $Calif = $_POST['Calif'];
  $Descripcion= $_POST['descripcion'];
  $Fecha = date('Y-m-d', time());

  if ($_POST["Genero"] === "Hombre") {
    $gen = $_POST["Genero"];
  }else
    $gen = $_POST["Genero"];
  $Sqlmail="SELECT * FROM usuarios";
  $Sql = "INSERT INTO asesorias(Nombre_Asesor, Matricula_Alumno, Materia, Carrera, Motivo_Asesoria, Genero, Grupo, Cuatrimestre, Parcial, Periodo, Calificacion, Descripcion, Fecha) VALUES ('".$Asesor."', '".$Matri."', '".$Materia."', '".$Carrera."', '".$Mot."', '".$gen."', '".$Grupo."', '".$Cuatri."', '".$Par."', '".$Periodo."', '".$Calif."', '".$Descripcion."', '".$Fecha."');";
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
        <a class="navbar-brand" href="../index.html">
          <img src="../../assets/img/brand/white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../../index.html">
                  <img src="../../assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
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
          echo "<img src='../../assets/img/brand/Exito.png' width='100px' height='100px'>'";
          echo "<h1>REGISTRO CON EXITO!!!</h1>";
          echo "<meta http-equiv='Refresh' content='1; URL=../Asesorias.php'>";
        } else{
          echo "<img src='../../assets/img/brand/Error.png' width='100px' height='100px'> <br>";
          echo "<h1>HUBO UN ERROR INTENTELO MAS TARDE</h1> ".$Sql."<br>".mysqli_error($con);
          echo "<meta http-equiv='Refresh' content='1; URL=../Inicio.php'>";
        }
 /*       $result = mysqli_query($con, $Sqlmail);
        while ( $row = mysqli_fetch_array($result)) {
          
        }

        $mail = new PHPMailer(true);

          try {
    //Server settings
          $mail->SMTPDebug = 0;                                       // Enable verbose debug output
          $mail->isSMTP();                                            // Set mailer to use SMTP
          $mail->Host       = 'smtp.gmail.com;smtp.live.com';         // Specify main and backup SMTP servers
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'poti9976@gmail.com';             // SMTP username
          $mail->Password   = '1234as';                         // SMTP password
          $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
          $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('brianalexbrito@gmail.com', 'Informante');
    $mail->addAddress($email);              // Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');             // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        // Optional name

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'UPT Asesoria';
    $mail->Body    = '<h1> Hola, </h1> ' . 
    '<hr></hr>' .
    'Recientemente pidio un cambio de contraseña para su cuenta de "Gestor UPT"<br>' . 
    'la clave para su cambio de contraseña es: <br>' .
    '<br>' . 
    '<h2>Ejemplo</h2> <br>' . 
    '<br>' . 
    'Si no ha pedido un cambio de contraseña, por favor ignore este mensaje<br>' . 
    'o contacte a soporte tecnico para mas informacion. El codigo solo sera<br>' . 
    'valido en las siguientes 24 horas de recibido. <br>' . 
    '<br>' . 
    'Gracias,<br>' . 
    'El equipo creativo tras Gestor UPT.<br>' . 
    'http://localhost/gestorupt-master/';
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo '<script>
        alert("El mensaje se envio correctamente");
        window.history.go(-1);
        </script>';
    } catch (Exception $e) {
    echo '<script>
        alert("No se encontro el correo electronico, intentelo de nuevo.");
        window.history.go(-1);
        </script>';
    }*/
       ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>