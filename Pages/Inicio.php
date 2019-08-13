<?php 
  include_once 'Registrosphp/user.php';
  include_once 'Registrosphp/SesionUsu.php';

  $Sesion = new SesionUsuario();
  $Usuario = new User();
  $Usuario->setUsuario($Sesion->getCurrentUser());
  $Usuario->setCorreo($Sesion->getCurrentUser());
  $Usuario->setTelefono($Sesion->getCurrentUser());
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio</title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css" rel="stylesheet">
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
        <img src="../assets/img/brand/upts.png" class="navbar-brand-img" alt="...">
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
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="Perfil.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Mi Perfil</span>
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
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-circle-08"></i> Tutorias Individuales
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="../Pages/profile.html" class="dropdown-item" data-toggle="modal" data-target="#Modal_Ind">
                <i class="ni ni-single-02"></i>
                <span>Registrar Tutoria</span>
              </a>
              <a href="../Pages/Tutorias_Ind.php" class="dropdown-item">
                <i class="fas fa-users"></i>
                <span>Mostrar Tutorias</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-users"></i> Tutorias Grupales
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                <i class="ni ni-single-02"></i>
                <span>Registrar Tutoria</span>
              </a>
              <a href="../Pages/Tutorias_Grup.php" class="dropdown-item">
                <i class="fas fa-users"></i>
                <span>Mostrar Tutorias</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-single-02"></i> Asesorias
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#Modal_Ase">
                <i class="ni ni-single-02"></i>
                <span>Registrar Tutoria</span>
              </a>
              <a href="Asesorias.php" class="dropdown-item">
                <i class="fas fa-users"></i>
                <span>Mostrar Tutorias</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bullet-list-67"></i> Encuestas de Satisfaccion
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="" class="dropdown-item" data-toggle="modal" data-target="#Modal_Encu">
                <i class="fab fa-wpforms"></i>
                <span>Registrar Encuesta</span>
              </a>
              <a href="pdf.php" class="dropdown-item">
                <i class="fas fa-list-ol"></i>
                <span>Mostrar Encuestas</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-chart-line"></i> Reportes Estadisticos
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="../Pages/excel.php" class="dropdown-item">
                <i class="fas fa-file-alt" href="../Pages/excel.php"  value="Exportar a Excel"></i>
                <span>Mostrar Excel</span>
              </a>
              <a href="pdf.php" class="dropdown-item">
                <i class="fas fa-poll"></i>
                <span>Mostrar PDF's</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-book-reader"></i>Tutores
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="../Pages/profile.html" class="dropdown-item">
                <i class="fas fa-file-alt"></i>
                <span>Difucio Informacion Estudiantil</span>
              </a>
              <a href="../Pages/profile.html" class="dropdown-item">
                <i class="fas fa-poll"></i>
                <span>Mostrar Encuestas</span>
              </a>
            </div>
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Inicio</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" action="" method="POST" id="Buscador">
               <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <input class="form-control" placeholder="Search" type="text" name="search" id="search" autocomplete="off" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" id="result">

                  </div>
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
              <a href="Perfil.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Mi Perfil</span>
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
    <div class="header bg-gradient-greenl pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">MAESTROS SIN VALIDAR </h5>
                      <span class="h2 font-weight-bold mb-0">15</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">ALUMNOS ASESORIAS VALIDADAS</h5>
                      <span class="h2 font-weight-bold mb-0">254</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">TUTORIAS INDIVIDUALES</h5>
                      <span class="h2 font-weight-bold mb-0">2170</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 87.10%</span>
                    <span class="text-nowrap">MAYO-AGOSTO</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">ASESORIAS IMPARTIDAS</h5>
                      <span class="h2 font-weight-bold mb-0">1702</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 82%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card bg-gradient-default2 shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <!--Modal Tutoria Individual-->
                <div class="modal fade" id="Modal_Ind" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Formulario Para el Registro de Tutorias</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                        <div class="card bg-secondary shadow border-0">
                          <div class="card-body px-lg-5 py-lg-5">
                            <form role="form" action="Registrosphp/Regis_Tut_Ind.php" method="POST">
                              <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                  </div>
                                  <input name="Matricula" class="form-control" placeholder="Escriba Matricula del Alumno" type="text" autocomplete="off" name="search" id="search">
                                  <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" id="result">

                                </div>
                                </div>
                                <div class="form-group">
                                  <div class="text-center">
                                      <button type="submit" class="btn btn-primary mt-4">Buscar</button>
                                  </div>
                                </div>
                                <div class="table-responsive">
                                  <table class="table align-items-center table-white">
                                  <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">Project</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Users</th>
                                        <th scope="col">Completion</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                              <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                            </a>
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">Argon Design System</span>
                                            </div>
                                        </div>
                                      </th>
                                    <td>
                                      $2,500 USD
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                          <i class="bg-warning"></i> pending
                                        </span>
                                    </td>
                                    <td>
                                      <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                          <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
                                          <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
                                          <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
                                        </a>
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
                                          <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                        </a>
                                      </div>
                                    </td>
                                    <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">60%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">Angular Now UI Kit PRO</span>
                    </div>
                </div>
            </th>
            <td>
                $1,800 USD
            </td>
            <td>
                <span class="badge badge-dot">
                  <i class="bg-success"></i> completed
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">100%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/sketch.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">Black Dashboard</span>
                    </div>
                </div>
            </th>
            <td>
                $3,150 USD
            </td>
            <td>
                <span class="badge badge-dot mr-4">
                  <i class="bg-danger"></i> delayed
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">72%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/react.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">React Material Dashboard</span>
                    </div>
                </div>
            </th>
            <td>
                $4,400 USD
            </td>
            <td>
                <span class="badge badge-dot">
                  <i class="bg-info"></i> on schedule
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">90%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                    </a>
                    <div class="media-body">
                        <span class="mb-0 text-sm">Vue Paper UI Kit PRO</span>
                    </div>
                </div>
            </th>
            <td>
                $2,200 USD
            </td>
            <td>
                <span class="badge badge-dot mr-4">
                  <i class="bg-success"></i> completed
                </span>
            </td>
            <td>
                <div class="avatar-group">
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
      <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Romina Hadid">
      <img alt="Image placeholder" src="../assets/img/theme/team-2-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Alexander Smith">
      <img alt="Image placeholder" src="../assets/img/theme/team-3-800x800.jpg" class="rounded-circle">
  </a>
    <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Jessica Doe">
      <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
  </a>
</div>

            </td>
            <td>
                <div class="d-flex align-items-center">
                    <span class="mr-2">100%</span>
                    <div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

</div>
<br>
                              <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Registrar</button>
                                <button type="reset" class="btn btn-primary mt-4">Limpiar</button>
                              </div>
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
            <!--Fin Modal-->
            <!--Modal Tutoria Grupal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario Para el Registro de Tutorias</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                          <form role="form" action="Registrosphp/Regis_Tut_Grup.php" method="POST">
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nombre del Tutor" type="text" name="Tutor">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Matricula del Alumno (Jefe de Grupo)" type="text" name="jefe">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3 input-group-alternative">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Motivo</label>
                                </div>
                                  <select class="custom-select" name="Motivo">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="1A">1A (Desempeño) [Numero Importante de Alumnos con Materias Reprobadas]</option>
                                    <option value="1B">1B (Desempeño) [Num. Importantes de Alumnos en situacion de Evaluacion por Competencias]</option>
                                    <option value="1C">1C (Desempeño) [Baja o Nula participacion en las actividades academicas]</option>
                                    <option value="1D">1D (Desempeño) [Baja Calidad y Entrega en Trabajos académicos]</option>
                                    <option value="1E">1E (Desempeño) [Nula Entrega de Trabajos Académicos]</option>
                                    <option value="1F">1F (Desempeño) [Bajo Nivel en Competencias básicas o clave]</option>
                                    <option value="1G">1G (Desempeño) [Bajo nivel en Competencias transversales o genericas]</option>
                                    <option value="1H">1H (Desempeño) [Bajo nivel en Competencias técnicas o especificas]</option>
                                    <option value="1I">1I (Desempeño) [Seguimiento del desempeño del alumno]</option>
                                    <option value="2A">2A (Informativa) [Reglamento Institucional, Codigo Moral,...Reglamentos de Aulas Interactivas]</option>
                                    <option value="2B">2B (Informativa) [Procesos Academicos, Calendario de Evaluaciones...Becas]</option>
                                    <option value="2C">2C (Informativa) [Eventos, Practicas, Visitas Guiadas,... Platicas Sobre La Seguridad]</option>
                                    <option value="3A">3A (Problemas de Conducta) [Uso De Lenguje Inadecuado, Conductas Inadecuadas]</option>
                                    <option value="3B">3B (Problemas de Conducta) [Conato de Agreasion Verbal y/o Físico]</option>
                                    <option value="3C">3C (Problemas de Conducta) [Conflicto Intragrupal]</option>
                                    <option value="3D">3D (Problemas de Conducta) [Conflicto Intergrupal]</option>
                                    <option value="3E">3E (Problemas de Conducta) [Robo]</option>
                                    <option value="3F">3F (Problemas de Conducta) [Conflicto con el docente]</option>
                                    <option value="3G">3G (Problemas de Conducta) [Limpieza, alimentos y orden en el salón]</option>
                                    <option value="4">4 Charla Motivacional o Temática</option>
                                    <option value="5">5 Dinamica Grupal</option>
                                    <option value="6">6 Solicitud del Alumno</option>
                                    <option value="7">7 Faltas</option>
                                    <option value="8">8 Retardos</option>
                                    <option value="9">9 Felicitacion al Grupo</option>
                                    <option value="10">10 Otros</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Grupo" type="text" name="Grupo">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3 input-group-alternative">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Cuatrimestre</label>
                              </div>
                                <select class="custom-select" name="Cuatri">
                                  <option selected>Seleccionen Una Opcion</option>
                                  <option value="Primero">Primero</option>
                                  <option value="Segundo">Segundo</option>
                                  <option value="Tercero">Tercero</option>
                                  <option value="Cuarto">Cuarto</option>
                                  <option value="Quinto">Quinto</option>
                                  <option value="Sexto">Sexto</option>
                                  <option value="Septimo">Septimo</option>
                                  <option value="Octavo">Octavo</option>
                                  <option value="Noveno">Noveno</option>
                                  <option value="Decimo">Decimo</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3 input-group-alternative">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Parcial</label>
                                </div>
                                  <select class="custom-select" name="Par">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="Primero">Primero</option>
                                    <option value="Segundo">Segundo</option>
                                    <option value="Tercero">Tercero</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3 input-group-alternative">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Periodo</label>
                                </div>
                                  <select class="custom-select" name="Peri">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="Enero-Abril">Enero - Abril</option>
                                    <option value="Mayo-Agosto">Mayo - Agosto</option>
                                    <option value="Septiembre-Diciembre">Septiembre - Diciembre</option>
                                  </select>
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
                              <button type="submit" class="btn btn-primary mt-4">Registrar</button>
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
            <!--Fin Modal-->
            <!--Modal Asesorias-->
            <div class="modal fade" id="Modal_Encu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <form role="form" action="Registrosphp/Regis_Ase.php" method="POST">
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nombre del Asesor" type="text" name="Asesor">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Matricula del Alumno" type="text" name="Matricula">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Materia" type="text" name="Materia">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Grupo" type="text" name="Grupo">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3 input-group-alternative">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Carrera</label>
                                </div>
                                  <select class="custom-select" name="Carrera">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="Enero-Abril">Lic.Negocios Internacionales</option>
                                    <option value="Ingenieria Financiera">Ingenieria Financiera</option>
                                    <option value="Ingenieria en Software">Ingenieria Software</option>
                                    <option value="Ingenieria en Tecnología de Manufactura">Ingenieria en Tecnología de Manufactura</option>
                                    <option value="Ingenieria Mecanica Automotriz">Ingenieria Mecanica Automotriz</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3 input-group-alternative">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Motivo</label>
                                </div>
                                  <select class="custom-select" name="Motivo">
                                    <option selected>Seleccione una Opcion</option>
                                    <option value="1A">1A [Desempeño] (Materias Reprobadas Indicar cuántas y cuáles)</option>
                                    <option value="1B">1B [Desempeño] (Evaluacion de Competencias)</option>
                                    <option value="1C">1C [Desempeño] (Bajo o Nulo Desempeño Académico)</option>
                                    <option value="1D">1D [Desempeño] (Baja Calidad en Trabajos Académicos)</option>
                                    <option value="1E">1E [Desempeño] (Nula Entrega de Trabajos Académicos)</option>
                                    <option value="1F">1F [Desempeño] (Aclaracion de Dudas)</option>
                                    <option value="1G">1G [Desempeño] (Para Presentar Evaluación por Recuperación)</option>
                                    <option value="1H">1H [Desempeño] (Asesoría Estancia/Estadía)</option>
                                    <option value="2">2 [Temática] (Diferentes temas Especificar en Observaciones)</option>
                                    <option value="3">3 [Otros] (Especificar)</option>
                                  </select>
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
                                <div class="form-group">
                                  <div class="input-group mb-3 input-group-alternative">
                                    <div class="input-group-prepend">
                                      <label class="input-group-text" for="inputGroupSelect01">Periodo</label>
                                    </div>
                                    <select class="custom-select" name="Peri">
                                      <option selected>Seleccionen Una Opcion</option>
                                      <option value="Enero-Abril">Enero - Abril</option>
                                      <option value="Mayo-Agosto">Mayo - Agosto</option>
                                      <option value="Septiembre-Diciembre">Septiembre - Diciembre</option>
                                     </select>
                                  </div>
                                </div>
                              <div class="form-group">
                                <div class="input-group mb-3 input-group-alternative">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Cuatrimestre</label>
                                  </div>
                                  <select class="custom-select" name="Cuatri">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="Primero">Primero</option>
                                    <option value="Segundo">Segundo</option>
                                    <option value="Tercero">Tercero</option>
                                    <option value="Cuarto">Cuarto</option>
                                    <option value="Quinto">Quinto</option>
                                    <option value="Sexto">Sexto</option>
                                    <option value="Septimo">Septimo</option>
                                    <option value="Octavo">Octavo</option>
                                    <option value="Noveno">Noveno</option>
                                    <option value="Decimo">Decimo</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group mb-3 input-group-alternative">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Parcial</label>
                                  </div>
                                  <select class="custom-select" name="Par">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="Primero">Primero</option>
                                    <option value="Segundo">Segundo</option>
                                    <option value="Tercero">Tercero</option>
                                  </select>
                                </div>
                              </div>
                                  <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                      </div>
                                      <input class="form-control" placeholder="Calificacion" type="text" name="Calif">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                      </div>
                                      <textarea class="form-control" placeholder="Descripcion del Motivo" name="descripcion"></textarea>
                                    </div>
                                  </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Registrar</button>
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
            <!--Fin Modal-->
            <!--Modal Encuestas de Satisfaccion-->
            <div class="modal fade" id="Modal_Ase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario Para el Registro de Encuestas de Satisfaccion</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                          <form role="form" action="Registrosphp/Regis_Ase.php" method="POST">
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nombre del Tutor" type="text" name="Tut">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Matricula del Profesor" type="text" name="Prof">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nombre del Alumno" type="text" name="Alum">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control" placeholder="Matricula del Alumno" type="text" name="Grupo">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3 input-group-alternative">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Carrera</label>
                                </div>
                                  <select class="custom-select" name="Carrera">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="Enero-Abril">Lic.Negocios Internacionales</option>
                                    <option value="Ingenieria Financiera">Ingenieria Financiera</option>
                                    <option value="Ingenieria en Software">Ingenieria Software</option>
                                    <option value="Ingenieria en Tecnología de Manufactura">Ingenieria en Tecnología de Manufactura</option>
                                    <option value="Ingenieria Mecanica Automotriz">Ingenieria Mecanica Automotriz</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3 input-group-alternative">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Motivo</label>
                                </div>
                                  <select class="custom-select" name="Motivo">
                                    <option selected>Seleccione una Opcion</option>
                                    <option value="1A">1A [Desempeño] (Materias Reprobadas Indicar cuántas y cuáles)</option>
                                    <option value="1B">1B [Desempeño] (Evaluacion de Competencias)</option>
                                    <option value="1C">1C [Desempeño] (Bajo o Nulo Desempeño Académico)</option>
                                    <option value="1D">1D [Desempeño] (Baja Calidad en Trabajos Académicos)</option>
                                    <option value="1E">1E [Desempeño] (Nula Entrega de Trabajos Académicos)</option>
                                    <option value="1F">1F [Desempeño] (Aclaracion de Dudas)</option>
                                    <option value="1G">1G [Desempeño] (Para Presentar Evaluación por Recuperación)</option>
                                    <option value="1H">1H [Desempeño] (Asesoría Estancia/Estadía)</option>
                                    <option value="2">2 [Temática] (Diferentes temas Especificar en Observaciones)</option>
                                    <option value="3">3 [Otros] (Especificar)</option>
                                  </select>
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
                                <div class="form-group">
                                  <div class="input-group mb-3 input-group-alternative">
                                    <div class="input-group-prepend">
                                      <label class="input-group-text" for="inputGroupSelect01">Periodo</label>
                                    </div>
                                    <select class="custom-select" name="Peri">
                                      <option selected>Seleccionen Una Opcion</option>
                                      <option value="Enero-Abril">Enero - Abril</option>
                                      <option value="Mayo-Agosto">Mayo - Agosto</option>
                                      <option value="Septiembre-Diciembre">Septiembre - Diciembre</option>
                                     </select>
                                  </div>
                                </div>
                              <div class="form-group">
                                <div class="input-group mb-3 input-group-alternative">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Cuatrimestre</label>
                                  </div>
                                  <select class="custom-select" name="Cuatri">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="Primero">Primero</option>
                                    <option value="Segundo">Segundo</option>
                                    <option value="Tercero">Tercero</option>
                                    <option value="Cuarto">Cuarto</option>
                                    <option value="Quinto">Quinto</option>
                                    <option value="Sexto">Sexto</option>
                                    <option value="Septimo">Septimo</option>
                                    <option value="Octavo">Octavo</option>
                                    <option value="Noveno">Noveno</option>
                                    <option value="Decimo">Decimo</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group mb-3 input-group-alternative">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Parcial</label>
                                  </div>
                                  <select class="custom-select" name="Par">
                                    <option selected>Seleccionen Una Opcion</option>
                                    <option value="Primero">Primero</option>
                                    <option value="Segundo">Segundo</option>
                                    <option value="Tercero">Tercero</option>
                                  </select>
                                </div>
                              </div>
                                  <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                      </div>
                                      <input class="form-control" placeholder="Calificacion" type="text" name="Calif">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group input-group-alternative mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                      </div>
                                      <textarea class="form-control" placeholder="Descripcion del Motivo" name="descripcion"></textarea>
                                    </div>
                                  </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Registrar</button>
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
            <!--Fin Modal-->
                <div class="col">
                  <h6 class="text-uppercase text-light ls-1 mb-1">UNIVERSIDAD POLITECNICA DE TECAMAC</h6>
                  <h2 class="text-greenl mb-0">EFICACIA EN ASESORIAS IMPARTIDAS</h2>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Mensual</span>
                        <span class="d-md-none">M</span>
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">Bimestral</span>
                        <span class="d-md-none">W</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">UNIVERSIDAD POLITECNICA DE TECAMAC</h6>
                  <h2 class="mb-0">EFICACIA EN TUTORIAS INDIVIDUALES</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <canvas id="chart-orders" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">EFICACIA</h3>
                </div>
                <div class="col text-right">
                 <!-- <a href="#!" class="btn btn-sm btn-primary">See all</a>-->
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">CARRERA</th>
                    <th scope="col">ALUMNOS</th>
                    <th scope="col">VALIDACIONES</th>
                    <th scope="col">EFICACIA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      LICENCIATURA EN NEGOCIOS INTERNACIONALES
                    </th>
                    <td>
                      4,569
                    </td>
                    <td>
                      340
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      INGENIERIA EN SOFTWARE
                    </th>
                    <td>
                      3,985
                    </td>
                    <td>
                      319
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      INGENIERIA AUTOMOTRIZ
                    </th>
                    <td>
                      3,513
                    </td>
                    <td>
                      294
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      INGENIERIA FINANCIERA
                    </th>
                    <td>
                      2,050
                    </td>
                    <td>
                      147
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                        INGENIERIA TECNOLOGIA DE MANUFACTURA
                    </th>
                    <td>
                      1,795
                    </td>
                    <td>
                      190
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">SEMAFORIZACION</h3>
                </div>
                <div class="col text-right">
                <!--  <a href="#!" class="btn btn-sm btn-primary">See all</a>-->
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Referral</th>
                    <th scope="col">Visitors</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Facebook
                    </th>
                    <td>
                      1,480
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Facebook
                    </th>
                    <td>
                      5,480
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">70%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Google
                    </th>
                    <td>
                      4,807
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">80%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Instagram
                    </th>
                    <td>
                      3,678
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">75%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      twitter
                    </th>
                    <td>
                      2,645
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">30%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
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
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="busqueda.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>