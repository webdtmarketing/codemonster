<?PHP 
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
    date_default_timezone_set("America/Caracas");

    $boton = $_POST["boton"];
    
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];

    if($boton=="Registrarse")

    {
      echo "<script>window.location='email.php?nombre=$nombre&telefono=$telefono&correo=$correo'</script>";
    }
    else
    {

    }
?> 
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dt Monster Leads</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" href="assets/css/monster.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.12.0/css/bootstrap-tour-standalone.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <img src="assets/images/logos/logo.png" width="230" alt="" class=""/>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
         <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          
          <ul id="sidebarnav">

            <li class="sidebar-item firts">
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                  <i class="fa fa-user"></i>
                </span>
                <span class="hide-menu">Accounts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="project.php#openModal" aria-expanded="false">
                <span>
                  <i class="fas fa-bullhorn"></i>
                </span>
                <span class="hide-menu">Campaigns</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="leads.php#openModal" aria-expanded="false">
                <span>
                  <i class="fa fa-filter"></i>
                </span>
                <span class="hide-menu">Leads</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="reports.php#openModal" aria-expanded="false">
                <span>
                  <i class="fa fa-line-chart"></i>
                </span>
                <span class="hide-menu">Reports</span>
              </a>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="messages.php#openModal" aria-expanded="false">
                <span>
                  <i class="fa fa-message"></i>
                </span>
                <span class="hide-menu">Messages</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="integrations.php#openModal" aria-expanded="false">
                <span>
                  <i class="fa fa-link"></i>
                </span>
                <span class="hide-menu">Integrations</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="settings.php#openModal" aria-expanded="false">
                <span>
                  <i class="fa fa-cog"></i>
                </span>
                <span class="hide-menu">Settings</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://home.dtmonsterleads.com/" aria-expanded="false">
                <span>
                  <i class="fa fa-sign-out test"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>

          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover das" href="#openEmail" id="drop2" >
                  
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle msi">
                  Invitado
                </a>

              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
        <!-- Inicio del Modal Arranque-->
          <div class="modalup">           
          <!-- Cierre Modal-->
            <div id="openModal" class="modalDialog">
              <div>
                <a href="#close" title="Close" class="close">X</a>
        
                   <div class="text-center mt-2 mb-4" bis_skin_checked="1">
                    <img src="assets/images/logos/campa.jpg" alt="" class="imagenlog" width="480"> 
                  </div>
                
              </div>
            </div>
          </div>
          <!-- Cierre del Modal Arranque-->
          <!-- Inicio del Modal Email-->
          <div class="modalemail">           
          <!-- Cierre Modal-->
            <div id="openEmail" class="modalDialog">
              <div>
                <a href="#close" title="Close" class="close">X</a>               
                      <div class="modal-body" bis_skin_checked="1">
                                <div class="text-center mt-2 mb-4" bis_skin_checked="1">
                                  <img src="assets/images/logos/mail.jpg" alt="" class="imagenlog" width="180">
                                  <h2 class="tittlemodal">Regístrate</h2>

                                  <form class="" action="" method="post">
                                    <div class="mb-3" bis_skin_checked="1">
                                      <label for="username" class="newlabel">Nombre</label>
                                      <input class="form-control" type="text" name="nombre" id="username" required="" placeholder="Michael Zenaty">
                                    </div>
                                    <div class="mb-3" bis_skin_checked="1">
                                      <label for="username" class="newlabel">Dirección de Email</label>
                                      <input class="form-control" type="email" name="correo" id="emailaddress" required="" placeholder="john@deo.com">
                                    </div>
                                    <div class="mb-3" bis_skin_checked="1">
                                      <label for="username" class="newlabel">Numero Telefónico</label>
                                      <input class="form-control" type="text" name="telefono" id="telefono" required="" placeholder="0000-0000000">
                                    </div>
                                    <div class="mb-3 text-center" bis_skin_checked="1">
                                      <input type="submit" value="Registrarse" name="boton" class="btn btn-light-info text-info font-medium blue"> 
                                    </div>
                                  </form>
                              </div>
                            </div>
                
              </div>
            </div>
          </div>
          <!-- Cierre del Modal Email-->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 start">
              <span class="help-header">Manage Campaigns </span><button class="btn btn-primary start" id="start-tour">
              <i class="fa fa-rocket" aria-hidden="true"></i> Iniciar Tour
            </button>
              <br>
              <span class="nueva">Choose between options and get your campaign running

              </span>  
            </div>

            <div class="col-lg-12 meguil">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-3">
                      <a href="#openEmail" class="btn sis" data-bs-toggle="modal" data-bs-target="#global-modal"><span class="help-center-text-color" title="Comunícate con soporte técnico"> Visit help center</span><i class="fa fa-external-link" aria-hidden="true"></i></a> 
                      <br>
                      <a href="" class="tres" id="cprimero"><i class="fa fa-envelope nim" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."></i> Email Settings</a><br>
                      <button class="cuatro" data-bs-toggle="modal" data-bs-target="#global-modal" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="bi bi-linkedin nom"></i> linkedin Settings</button><br>
                      <button class="cuatro" data-bs-toggle="modal" data-bs-target="#global-modal" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry."><i class="bi bi-tools nom"></i> Global Settings</button>

                        </div>
                    <div class="col-lg-9">
                      <div class="row">
                        <div class="col-lg-4 camp">
                            <div class="progress" style="height: 3px;">
                              <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="btn btn-default btn-circle" data-bs-toggle="modal" data-bs-target="#global-modal">1
                            </button> <span class="info camp" id="csegundo"> Campaign info</span>
                        </div>
                        <div class="col-lg-4 camp">
                          <div class="progress" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <button type="button" class="btn btn-default btn-circle white" data-bs-toggle="modal" data-bs-target="#global-modal">2
                          </button> <span class="info camp"> Campaign settings</span>
                      </div>
                      <div class="col-lg-4 camp">
                        <div class="progress" style="height: 3px;">
                          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button" class="btn btn-default btn-circle white" data-bs-toggle="modal" data-bs-target="#global-modal">3
                        </button><span class="info camp"> Campaign steps</span>
                      </div>
                      </div>  
                      <div class="row desp">
                        <div class="col-lg-10">
                          <span class="info camp"> Email acconts to use for this campaign</span>
                        </div>
                        <div class="col-lg-2">
                          <i class="fa fa-sort-desc" aria-hidden="true"></i>

                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-10">
                          <span class="info camp"> Schedule email</span>
                        </div>
                        <div class="col-lg-2">
                          <i class="fa fa-sort-desc" aria-hidden="true"></i>

                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-lg-10">
                          <span class="info camp"> Email tracking preference</span>
                        </div>
                        <div class="col-lg-2">
                          <i class="fa fa-sort-desc" aria-hidden="true"></i>

                        </div>
                      </div>
                      <div class="row desp">
                        <div class="col-lg-8">

                        </div>
                        <div class="col-lg-4">
                          <a class="conec mis" href="smart-sequence.php#openModal" title="Lorem Ipsum is simply dummy text of the printing and typesetting industry." id="ctercero"> Create sequence</a><br>

                        </div>
                      </div>
                    </div>
                </div>

                <br>

                </div>
              </div>
            </div>
 
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://linkedin.dtmonsterleads.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">DT Monster Leads</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.12.0/js/bootstrap-tour-standalone.js"></script>
  <script src="manascript.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
</body>

</html>