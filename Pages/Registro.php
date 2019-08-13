<!DOCTYPE html>
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
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand-img2" href="../index.php">
          <img src="../assets/img/brand/uptb.png" width="200px" height="150px" />
        </a>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Bienvenido!</h1>
              <p class="text-lead text-light">Gracias por Considerarnos y Crear un Usuario para Disfrutar de Nuestros Beneficios</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="300 20 10 250" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 20 25600 100 0 300"></polygon>
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
              <div class="text-center text-muted mb-4">
                <small>Ingrese los Datos Solicitados</small>
              </div>
              <form role="form" action="Registrosphp/RegisUsu.php" method="POST" name="frmusu">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="Apellido_P" class="form-control" placeholder="Apellido Paterno" type="text" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="Apellido_M" class="form-control" placeholder="Apellido Materno" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="nombre" class="form-control" placeholder="Nombres" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="alias" class="form-control" placeholder="Alias" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input name="correo" class="form-control" placeholder="Correo Electronico" id="corr">
                  </div>    
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="contra" class="form-control" placeholder="Contraseña" type="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="contra2" class="form-control" placeholder="Confirme Contraseña" type="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input name="num_tel" class="form-control" placeholder="Numero de Telefono Mobil" type="text">
                  </div>
                </div>
                  
                <div class="form-group">
                    
                  <div class="custom-control custom-radio mb-3">
                    <input name="Genero" class="custom-control-input" id="Hombre" checked="" type="radio" value="Hombre">
                    <label class="custom-control-label" for="Hombre">Hombre</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                      <input name="Genero" class="custom-control-input" id="Mujer" type="radio" value="Mujer">
                      <label class="custom-control-label" for="Mujer">Mujer</label>
                    </div>
                    
                    
                  </div>
                  
                  
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4" onclick="return Validar();" name="registrar">Crear Cuenta</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6 text-left">
              <a href="../index.php" class="text-white"><small style=" font-size: 18.5px !important;">Ya Tengo una cuenta</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.0"></script>
  <!--Funciones para validar-->
  <script type="text/javascript">
    function Validar(){
        correo = document.getElementById("corr").value;
        var numero;
        var lengnatural =/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        numero = document.frmusu.num_tel.value;
        clave1 = document.frmusu.contra.value; 
        clave2 = document.frmusu.contra2.value;
        if (document.frmusu.Apellido_P.value.length==0){ 
          alert("Tiene que escribir su apellido paterno") 
          document.frmusu.Apellido_P.focus() 
          return 0; 

        }else if (document.frmusu.Apellido_M.value.length==0){ 
          alert("Tiene que escribir su apellido materno") 
          document.frmusu.Apellido_M.focus() 
          return 0; 

        }else if (document.frmusu.nombre.value.length==0){ 
          alert("Tiene que escribir su nombre") 
          document.frmusu.nombre.focus() 
          return 0; 

        }else if (document.frmusu.alias.value.length==0){ 
          alert("Tiene que escribir su alias") 
          document.frmusu.alias.focus() 
          return 0; 
        }else if (isNaN(numero) || (numero=="")){
          document.frmusu.num_tel.focus();
          alert("Debe de escribir un numero telefonico valido")
          return 0;
          isNotOk=true;
        }else if (clave1 == clave2){ 
          document.frmusu.submit();
        }else{
          alert("Las dos claves son distintas..."); 
        }
        if (isNotOk){
          return 0;
        }
        if(!(lengnatural.test(document.frmusu.correo.value))) {
          document.frmusu.correo.focus()
          alert("Tiene que escribir un correo electronico valido")
          return false; 
        }else{
          return true;
          document.frmusu.submit();
        }
      }   </script>
</body>
</html>