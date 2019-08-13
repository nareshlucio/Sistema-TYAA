<?php 
  include_once 'funciones.php';
  include_once 'user.php';
  include_once 'SesionUsu.php';
  $conexion = new BD();
  $Sesion = new SesionUsuario();
  $Usuario = new User();
  $con = conexion();
  $Usuario->setUsuario($Sesion->getCurrentUser());
  $Usuario->setCorreo($Sesion->getCurrentUser());
  $Usuario->setTelefono($Sesion->getCurrentUser());
  $aliasusu = $Sesion->getCurrentUser();
  $Sqlinfo= "SELECT * FROM usuarios WHERE Alias ='".$aliasusu."'";
  $resul=mysqli_query($con, $Sqlinfo);
 ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title><?php echo $Usuario->getUsuario(); ?></title>
  <!-- Favicon -->
  <link href="../../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../../assets/css/argon.css?v=1.0.0" rel="stylesheet">
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
        <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
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
                <img alt="Image placeholder" src="../<?php echo $Usuario->getAvatar(); ?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome! <?php echo $Usuario->getUsuario(); ?></h6>
            </div>
            <a href="../Perfil.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="../Pages/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="../Pages/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="../Pages/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="Logout.php" class="dropdown-item">
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
              <a href="../../index.html">
                <img src="../../assets/img/brand/blue.png">
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
        <?php 
          if(isset($menserror)){
            echo "<div class='alert alert-warning' role='alert'>";
            echo "<span class='alert-inner--icon'><i class='ni ni-bell-55'></i></span>";
            echo "<span class='alert-inner--text'><strong>Warning!</strong> ".$menserror." </span>";
            echo "</div>";
          }else if(isset($mensexit)){
            echo "<div class='alert alert-warning' role='alert'>";
            echo "<span class='alert-inner--icon'><i class='ni ni-bell-55'></i></span>";
            echo "<span class='alert-inner--text'><strong>Warning!</strong> ".$mensexit." </span>";
            echo "</div>";
          }
          ?>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none" >
          <div class="input-group input-group-rounded input-group-merge">
            <input type="text" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search" autocomplete="off">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
              <ul class="navbar-nav">
                <li class="nav-item">
                </li>
              </ul>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item disabled">
            <a href="../Inicio.php" class="nav-link">
              <i class="ni ni-tv-2 text-primary"></i> Inicio
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-circle-08"></i> Tutorias Individuales
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="../../Pages/profile.html" class="dropdown-item" data-toggle="modal" data-target="#Modal_Ind">
                <i class="ni ni-single-02"></i>
                <span>Registrar Tutoria</span>
              </a>
              <a href="../../Pages/Tutorias_Ind.php" class="dropdown-item">
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
              <a href="../Pages/Encuesta_S.php" class="dropdown-item">
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
              <a href="../Pages/profile.html" class="dropdown-item">
                <i class="fas fa-file-alt"></i>
                <span>Registrar Encuesta</span>
              </a>
              <a href="../Pages/Encuesta_S.php" class="dropdown-item">
                <i class="fas fa-poll"></i>
                <span>Mostrar Encuestas</span>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="" class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class=""></i>Tutores
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">User profile</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../<?php echo $Usuario->getAvatar(); ?>">
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
              <a href="Logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hola <?php echo $Usuario->getUsuario(); ?></h1>
            <p class="text-white mt-0 mb-5">En esta seccion puedes modificar tu informacion personal o incluir algo faltante</p>

          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <!-- Modal -->
                <div class="modal fade" id="modalContra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambio de Contraseña</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="Multregis.php" method="post" accesskey="">
                          <div class="row">
                            <div class="col-12">
                              <div class="form-group">
                                <label class="form-control-label">Contraseña Actual</label>
                                <input type="password" class="form-control form-control-alternative" placeholder="Contraseña Actual" name="contraActual" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Contraseña Nueva</label>
                                <input type="password" class="form-control form-control-alternative" placeholder="Nueva Contraseña" name="contraNueva" autocomplete="off">
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Repite la Nueva Contraseña</label>
                                <input type="password" class="form-control form-control-alternative" placeholder="Repite la Nueva Contraseña" name="contraRep" autocomplete="off">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="savecambios">Save changes</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-8">
                    <h3 class="mb-0">Mi Cuenta</h3>
                  </div>
                  <div class="col-4 text-right">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalContra">Contraseña</button>
                  </div>
                </div>
              </div>
              <div class="card-body">
              <?php 
                if($resul){
                while ($row = mysqli_fetch_array($resul)) { ?>
                  <form action="Multregis.php" method="Post" enctype="multipart/form-data" name="actualizardatos">
                    <h6 class="heading-small text-muted mb-4">Mi Informacion</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-username">Alias</label>
                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Alias" value="<?php echo $row['Alias'] ?>" name="Ali">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">Correo Electronico</label>
                            <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="ejemplo@gmail.com" value="<?php echo $row['Correo'] ?>" name="e-mail">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Edad</label>
                            <input type="number" id="input-last-name" class="form-control form-control-alternative" placeholder="Edad" value="<?php echo $row['Edad'] ?>" name="Edad">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Telefono</label>
                            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row['Telefono'] ?>" name="Tel">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-first-name">Apellido Paterno</label>
                            <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $row['Apellido_P'] ?>" name="ape_p">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Apellido Materno</label>
                            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row['Apellido_M'] ?>" name="ape_m">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Nombre/s</label>
                            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row['Nombre'] ?>" name="nom">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Ocupacion</label>
                            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="A que te dedicas" value="<?php echo $row['Ocupacion'] ?>" name="ocupacion">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Informacion de Contacto</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Direccion</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Direccion" value="<?php echo $row['Direccion'] ?>" type="text" name="dire">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Ciudad</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="Ciudad" value="<?php echo $row['Ciudad'] ?>" name="ciudad">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Pais</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Pais" value="<?php echo $row['Pais'] ?>" name="pais">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Codigo Postal</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Codigo Postal" value="<?php echo $row['CodPostal'] ?>" name="cod">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Sobre Mi</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>Sobre Mi</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="Da una breve descripcion de ti..." name="bio"><?php echo $row['Biografia'] ?></textarea>
                  </div>
                </div>
                <hr class="my-4" />
                <!--Multimedia-->
                <h6 class="heading-small text-muted mb-4">Archivos Multimedia</h6>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">                
                    <label class="form-control-label" for="Foto de Perfil">Foto de Perfil</label>
                    <input type="file" name="perfil" class="form-control form-control-alternative" accept="image/*" placeholder="Codigo Postal">
                  </div>
                </div>
                <hr class="my-4">
                <div class="pl-lg-4 ">
                  <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-success" value="Guardar Cambios" name="actualizar">
                  </div>
                </div>
              </form>
            <?php } 
                }?>
            </div>
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