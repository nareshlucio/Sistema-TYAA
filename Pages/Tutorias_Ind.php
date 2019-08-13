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
 $sql1 = "SELECT * FROM tutoria_indivudual;";
  $cent1 = $pdo->conexionPDO()->prepare($sql1);
  $cent1->execute();
 $res1 = $cent1->fetchall();
 #-------------------De todas las Tutorias------------------------
 #----------------Consulta de las tutorias con limite-------------
 $sql = "SELECT * FROM tutoria_indivudual LIMIT :inicio,:tutxpag";
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
    header('Location:Tutorias_Ind.php?pagina=1');
  }
  if ($_GET['pagina']>$pag || $_GET['pagina']< 0) {
    header('Location:Tutorias_Ind.php?pagina=1');
  }
  #----------------------------------------------------------------
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registro de Tutorias Individuales</title>
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
      <a class="navbar-brand pt-0" href="Inicio.html">
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
              <h6 class="text-overflow m-0">Welcome! <?php echo $Usuario->getUsuario(); ?></h6>
            </div>
            <a href="Perfil.php" class="dropdown-item">
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
            <a class="nav-link" href="Inicio.php">
              <i class="ni ni-tv-2 text-primary"></i> Inicio
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-circle-08"></i> Tutorias Individuales
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <a href="../Pages/profile.html" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                <i class="ni ni-single-02"></i>
                <span>Registrar Tutoria</span>
              </a>
              <a class="dropdown-item disabled">
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
              <a href="../Pages/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Registrar Tutoria</span>
              </a>
              <a href="../Pages/profile.html" class="dropdown-item">
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
              <a href="../Pages/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Registrar Tutoria</span>
              </a>
              <a href="../Pages/profile.html" class="dropdown-item">
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
              <a href="../Pages/profile.html" class="dropdown-item">
                <i class="fab fa-wpforms"></i>
                <span>Registrar Encuesta</span>
              </a>
              <a href="../Pages/profile.html" class="dropdown-item">
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.php">Regresar al Inicio</a>
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
              <a href="Perfil.php" class="dropdown-item">
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
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Tutorias Individuales</h1>
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
        <!-- Modal -->
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
                          <form role="form" action="Registrosphp/Regis_Tut_Ind.php" method="POST">
                            <div class="form-group">
                              <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input name="Tutor" class="form-control" placeholder="Nombre del Tutor" type="text" autocomplete="off">
                              </div>
                                <div class="form-group">
                                  <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input name="Prof" class="form-control" placeholder="Nombre del Profesor" type="text" autocomplete="off">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input name="Alumno" class="form-control" placeholder="Nombre del Alumno" type="text" autocomplete="off">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input name="Matri" class="form-control" placeholder="Matricula del Alumno" type="text" autocomplete="off">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="custom-control custom-radio mb-3">
                                    <input name="Genero" class="custom-control-input" id="Hombre" checked type="radio" value="Hombre">
                                    <label class="custom-control-label" for="Hombre">Hombre</label>
                                  </div>
                                  <div class="custom-control custom-radio mb-3">
                                    <input name="Genero" class="custom-control-input" id="Mujer" type="radio" value="Mujer">
                                    <label class="custom-control-label" for="Mujer">Mujer</label>
                                  </div>
                                </div>
                                <!--Seleccion de Motivo-->
                                <div class="form-group">
                                  <div class="input-group mb-3 input-group-alternative">
                                    <div class="input-group-prepend">
                                      <label class="input-group-text" for="Select01">Motivo</label>
                                    </div>
                                    <select class="custom-select" name="Motivo">
                                      <option selected>Seleccionen Una Opcion</option>
                                      <option value="1">1 (Conocer al Alumno)</option>
                                      <option value="2A">2A (Desempeño) [Materias Reprobadas (Especificar En Descripcion)]</option>
                                      <option value="2B">2B (Desempeño) [Evaluacion por Competencias]</option>
                                      <option value="2C">2C (Desempeño) [Baja o nula participacion en las actividades académicas]</option>
                                      <option value="2D">2D (Desempeño) [Baja calidad en trabajos académicos]</option>
                                      <option value="2E">2E (Desempeño) [Nula Entrega de Trabajos Academicos]</option>
                                      <option value="2F">2F (Desempeño) [Plan de Nivelacion]</option>
                                      <option value="2G">2G (Desempeño Estancia/Estadia) [Asesor reporta bajo desempeño]</option>
                                      <option value="2H">2H (Desempeño Estancia/Estadia) [Asesor reporta Faltas y/o Retardos]</option>
                                      <option value="2I">2I (Desempeño Estancia/Estadia) [Asesor reporta Alumnos Conflictivos]</option>
                                      <option value="2J">2J (Desempeño Estancia/Estadia) [El Empresario Asesor reporta bajo desempeño]</option>
                                      <option value="2K">2K (Desempeño Estancia/Estadia) [El Empresario Asesor reporta Faltas y/o Retardos]</option>
                                      <option value="2L">2L (Desempeño Estancia/Estadia) [El Empresario Asesor reporta Alumnos Conflictivos]</option>
                                      <option value="3A">3A (Informativa) [Reglamento Institucional, Codigo de Moral, Lineamientos de Seguridad... Reglamento]</option>
                                      <option value="3B">3B (Informativa) [Procesos Academicos, Fechas de exámenes, becas,... Programas de Apoyo]</option>
                                      <option value="3C">3C (Informativa) [Eventos, Practicas, Visitas Guiadas... Platica sobre Seguridad]</option>
                                      <option value="4A">4A (Problemas de Conducta) [Uso de Lenguaje Inadecuado, Conductas Inadecuadas]</option>
                                      <option value="4B">4B (Problemas de Conducta) [Conato de Agrecion verba y/o Físico]</option>
                                      <option value="4C">4C (Problemas de Conducta) [Aislamiento]</option>
                                      <option value="4D">4D (Problemas de Conducta) [Conflicto Intragrupal]</option>
                                      <option value="4E">4E (Problemas de Conducta) [Conflicto Intergrupal]</option>
                                      <option value="4F">4F (Problemas de Conducta) [Robo]</option>
                                      <option value="4G">4G (Problemas de Conducta) [Autoestima]</option>
                                      <option value="4H">4H (Problemas de Conducta) [Conflicto con el docente]</option>
                                      <option value="5">5 Cambio de Domicilio</option>
                                      <option value="6">6 Cambio de Instutucion</option>
                                      <option value="7">7 Casamiento</option>
                                      <option value="8">8 Charla Motivacional o Temática</option>
                                      <option value="9">9 deceso del Alumno</option>
                                      <option value="10A">10A Deceso de Tutores Económicos</option>
                                      <option value="10B">10B Deceso de Familiar</option>
                                      <option value="11">11 Divorcio / Separacion</option>
                                      <option value="12">12 Económicos</option>
                                      <option value="13">13 Enfermedad</option>
                                      <option value="14A">14A Faltas</option>
                                      <option value="14B">14B Retardos</option>
                                      <option value="15">15 Programa de tutorías Especializadas</option>
                                      <option value="16">16 Justificacion de Inasistencias</option>
                                      <option value="17">17 La carrera no Cubrio sus Expectativas</option>
                                      <option value="18">18 Madre o Padre Soltero</option>
                                      <option value="19">19 Embarazo y/o Maternidad</option>
                                      <option value="20">20 Problemas Laborales</option>
                                      <option value="21">21 Problemas Familiares</option>
                                      <option value="22A">22A Baja Temporal</option>
                                      <option value="22B">22B Baja Definitiva</option>
                                      <option value="23">23 Servicio Militar</option>
                                      <option value="24">24 Falta de Documentos</option>
                                      <option value="25">25 al Código de Etica</option>
                                      <option value="26">26 Otros</option>
                                    </select>
                                  </div>
                                </div>
                                <!--Fin Motivo-->
                                <div class="form-group">
                                  <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-ruler-pencil"></i></span>
                                    </div>
                                    <input name="Grupo" class="form-control" placeholder="Grupo" type="text">
                                  </div>
                                </div>
                                <!--Seleccion de Cuatrimestre-->
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
                                <!--Fin de Seleccion-->
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
                                <!--Seleccion de Periodo-->
                                <div class="form-group">
                                  <div class="input-group mb-3 input-group-alternative">
                                    <div class="input-group-prepend">
                                      <label class="input-group-text" for="inputGroupSelect01">Periodo</label>
                                    </div>
                                    <select class="custom-select" name="Par">
                                      <option selected>Seleccionen Una Opcion</option>
                                      <option value="Enero-Abril">Enero - Abril</option>
                                      <option value="Mayo-Agosto">Mayo - Agosto</option>
                                      <option value="Septiembre-Diciembre">Septiembre - Diciembre</option>
                                    </select>
                                  </div>
                                </div>
                                <!--Fin de Seleccion-->
                                <div class="form-group">
                                  <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-book-bookmark"></i></span>
                                    </div>
                                    <textarea name="des" class="form-control" placeholder="Descripcion del Motivo" name="txtdescripcion"></textarea>
                                  </div>
                                </div>
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
            </div>            <!--Fin del Modal-->
        <div class="col-lg-6 col-md-8">
          <div class="text-center text-muted mb-4">
          </div>
        </div>
      </div>
    </div>
  <div class="col-xl-12 col-md-12 col-sm-6">
    <div class="card shadow">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Lista de Tutorias Individuales</h3>
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
              <th scope="col">Nombre del Tutor</th>
              <th scope="col">Nombre del Profesor</th>
              <th scope="col">Nombre del Alumno</th>
              <th scope="col">Motivo de la Tutoria</th>
              <th scope="col">Grupo</th>
              <th scope="col">Genero</th>
              <th scope="col">Cuatrimestre</th>
              <th scope="col">Parcial</th>
              <th scope="col">Descripcion del Motivo</th>
              <th scope="col">Fecha de Registro</th>
            </tr>
          </thead>
                <tbody>
                    <?php foreach ($res as $tutorias): ?>                  
                  <tr>
                    <th scope="row">
                      <?php echo $tutorias['Nombre_Tutor'] ?>
                    </th>
                      <td>
                        <?php echo $tutorias['Nombre_Maestro'] ?>
                      </td>
                    <td>
                      <?php echo $tutorias['Nombre_Alumno'] ?>
                    </td>
                    <td>
                      <?php echo $tutorias['Motivo'] ?>
                    </td>
                    <td>
                      <?php echo $tutorias['Grupo'] ?>
                    </td>
                    <td>
                      <?php echo $tutorias['Genero'] ?>
                    </td>
                    <td>
                      <?php echo $tutorias['Cuatrimestre'] ?>
                    </td>
                    <td>
                      <?php echo $tutorias['Parcial'] ?>
                    </td>
                    <td>
                      <?php echo $tutorias['Descripcion_Motivo'] ?>
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
                <a class="page-link" href="Tutorias_Ind.php?pagina=<?php echo $_GET['pagina']-1?>">
                  <i class="fa fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <!--For para la numeracion de las Paginas-->
              <?php for($i=0;$i<$pag;$i++): ?>

                <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
                  <a class="page-link" href="Tutorias_Ind.php?pagina=<?php echo $i+1; ?>">
                  <?php echo $i+1 ?>
                  </a>
                </li>

              <?php endfor ?>
              <!-------------------Final----------------->
              <li class="page-item <?php echo $_GET['pagina']>=$pag ? 'disabled' : '' ?>">
                <a class="page-link" href="Tutorias_Ind.php?pagina=<?php echo $_GET['pagina']+1?>">
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