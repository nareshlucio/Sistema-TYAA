<?php 
 include_once 'Registrosphp/funciones.php';
 include_once 'Registrosphp/user.php';
 include_once 'Registrosphp/SesionUsu.php';
 $Sesion = new SesionUsuario();
  $Usuario = new User();
  $Usuario->setUsuario($Sesion->getCurrentUser());
  $Usuario->setCorreo($Sesion->getCurrentUser());
  $Usuario->setTelefono($Sesion->getCurrentUser());
  $pdo = new BD();
  $tutxpag = 5;
 #$pdo = conexionPDO();
 #----------------------------Consulta----------------------------
 $inicio = ($_GET['pagina']-1)*$tutxpag;
 $sql1 = "SELECT * FROM asesorias;";
  $cent1 = $pdo->conexionPDO()->prepare($sql1);
  $cent1->execute();
 $res1 = $cent1->fetchall();
 #-------------------De todas las Tutorias------------------------
 #----------------Consulta de las tutorias con limite-------------
 $sql = "SELECT * FROM asesorias LIMIT :inicio,:tutxpag";
 $cent = $pdo->conexionPDO()->prepare($sql);
 $cent->bindParam(':inicio', $inicio, PDO::PARAM_INT);
 $cent->bindParam(':tutxpag', $tutxpag, PDO::PARAM_INT);
 $cent->execute();
 $res = $cent->fetchall();
 #--------------------------FinConsulta---------------------------
 #-------------------Conteo de total de tutorias------------------
 $conteo = $cent1->rowCount();
 $pag = $conteo/$tutxpag;
 $pag = ceil($pag);
 #-----------------------Final de Conteo--------------------------
 if (!$_GET) {
    header('Location:Asesorias.php?pagina=1');
  }
  if ($_GET['pagina']>$pag || $_GET['pagina']< 0) {
    header('Location:Asesorias.php?pagina=1');
  }
  #----------------------------------------------------------------
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registro de Asesorias</title>
  <!-- Favicon -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo $Usuario->getAvatar(); ?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome! <?php echo $Usuario->getUsuario(); ?></h6>
            </div>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="../examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="Registrosphp/Logout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">
              <i class="ni ni-tv-2 text-primary"></i> Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Pages/Tutorias_Ind.php">
              <i class="ni ni-planet text-blue"></i> Registrar T.I
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Pages/Tutorias_Grup.php">
              <i class="ni ni-pin-3 text-orange"></i> Registrar T.G
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-single-02 text-yellow"></i> Registrar Asesoria
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Pages/Encuesta_S.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Registrar E.S
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Pages/login.html">
              <i class="ni ni-key-25 text-info"></i> Reportes
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Regresar al Inicio</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Buscar" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo $Usuario->getAvatar(); ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $Usuario->getUsuario(); ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="Registrosphp/Logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
<div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Registrar Asesorias</h1>
              <p class="text-lead text-light">En esta sección podra consultar todas las tutorias individuales que se han generado con el lapso del tiempo al igual que poder registrar nuevas tutorias individuales</p>
            </div>
          </div>
        </div>
      </div>
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
        <div class="text-center text-muted mb-4">
        <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Registrar Asesorias</button>
          <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario Para el Registro de Asesorias</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                          <form role="form">
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nombre del Tutor" type="text">
                              </div>
                            </div>
                              <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                  </div>
                                  <input class="form-control" placeholder="Matricula del Alumno" type="text">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                  </div>
                                  <input class="form-control" placeholder="Motivo de la Asesoria" type="email">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="custom-control custom-radio mb-3">
                                    <input name="Genero" class="custom-control-input" id="Hombre" checked="" type="radio">
                                    <label class="custom-control-label" for="Hombre">Hombre</label>
                                  </div>
                                    <div class="custom-control custom-radio mb-3">
                                      <input name="Genero" class="custom-control-input" id="Mujer" type="radio">
                                      <label class="custom-control-label" for="Mujer">Mujer</label>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                     <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                      </div>
                                      <input class="form-control" placeholder="Cuatrimestre" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                      </div>
                                      <input class="form-control" placeholder="Parcial" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                      </div>
                                      <input class="form-control" placeholder="Calificacion" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                      </div>
                                      <textarea class="form-control" placeholder="Descripcion del Motivo" name="txtdescripcion"></textarea>
                                    </div>
                                  </div>
                                  <div class="text-center">
                                    <button type="button" class="btn btn-primary mt-4" data-dismiss="modal">Registrar</button>
                                    <button type="reset" class="btn btn-primary mt-4">Limpiar</button>
                                  </div>
                                </form>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-xl-12 col-md-12 col-sm-6">
      <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Lista de Asesorias</h3>
          </div>
          <div class="col text-right">
            <i class="ni ni-badge"></i>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Nombre del Asesor</th>
              <th scope="col">Matriucla del Alumno</th>
              <th scope="col">Materia</th>
              <th scope="col">Carrera</th>
              <th scope="col">Motivo</th>
              <th scope="col">Genero</th>
              <th scope="col">Grupo</th>
              <th scope="col">Cuatrimestre</th>
              <th scope="col">Parcial</th>
              <th scope="col">Periodo</th>
              <th scope="col">Calificacion</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Fecha</th>
            </tr>
          </thead>
            <tbody>
              <?php foreach ($res as $tutorias): ?>                  
                <tr>
                <th scope="row">
                  <?php echo $tutorias['Nombre_Asesor'] ?>
                </th>
                <td>
                  <?php echo $tutorias['Matricula_Alumno'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Materia'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Carrera'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Motivo_Asesoria'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Genero'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Grupo'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Cuatrimestre'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Parcial'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Periodo'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Calificacion'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Descripcion'] ?>
                </td>
                <td>
                  <?php echo $tutorias['Fecha'] ?>
                </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xl-4 col-md-6 col-sm-6">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">

              <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled': '' ?>">
                <a class="page-link" href="Asesorias.php?pagina=<?php echo $_GET['pagina']-1?>">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <!--For para la numeracion de las Paginas-->
              <?php for($i=0;$i<$pag;$i++): ?>

                <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
                  <a class="page-link" href="Asesorias.php?pagina=<?php echo $i+1; ?>">
                  <?php echo $i+1 ?>
                  </a>
                </li>

              <?php endfor ?>
              <!-------------------Final----------------->
              <li class="page-item <?php echo $_GET['pagina']>=$pag ? 'disabled' : '' ?>">
                <a class="page-link" href="Asesorias.php?pagina=<?php echo $_GET['pagina']+1?>">
                  <i class="fa fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
        </nav>
      </div>
    </div>
        </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>