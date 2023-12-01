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
                    <img src="assets/images/logos/message.jpg" alt="" class="imagenlog" width="480"> 
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
        <div class="row messsync">
          <div class="col-lg-3">
            <select class="form-select messaje" aria-label="Default select example" id="mprimero">
              <option selected>Filter by Report Type</option>
              <option>Linkedin</option> 
              <option>Email</option>                    
              <option>Data enrichment</option>
             </select>
          </div>  
          <div class="col-lg-2">
            <a href="#openEmail" class="btn" data-bs-toggle="modal" data-bs-target="#global-modal" title="Comunícate con soporte técnico"><span class="help-center-text-color"> Visit help center</span><i class="fa fa-external-link" aria-hidden="true"></i></a>
          </div> 
          <div class="col-lg-2">
            <button class="btn btn-primary start" id="start-tour">
              <i class="fa fa-rocket" aria-hidden="true"></i> Iniciar Tour
            </button>
          </div> 
          <div class="col-lg-3">
            <i class="bi bi-linkedin" aria-hidden="true"></i><span class="messtxt"> Last sync: 3 hours ago</span><br>
            <i class="bi bi-envelope-open-fill" aria-hidden="true"></i><span class="messtxt"> Sync by default every 20 min </span><i class="bi bi-info-circle-fill" aria-hidden="true"></i>
          </div>
          <div class="col-lg-2">
            <button class="conec dos" id="msegundo"><i class="bi bi-linkedin" aria-hidden="true"></i> Sync</button>
          </div>


      </div>
      <div class="row">
        <section>
          <div class="container py-5">
        
            <div class="row">
              <div class="col-md-12">
        
                <div class="card" id="chat3" style="border-radius: 15px;">
                  <div class="card-body">
        
                    <div class="row">
                      <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
        
                        <div class="p-3">
        
                          <div class="input-group rounded mb-3">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                              aria-describedby="search-addon" id="mtercero"/>
                            <span class="input-group-text border-0" id="search-addon">
                              <i class="fas fa-search"></i>
                            </span>
                          </div>
        
                          <div data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
                            <ul class="list-unstyled mb-0">
                              <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                  <div class="d-flex flex-row">
                                    <div>
                                      <img
                                        src="assets/images/logos/user.png"
                                        alt="avatar" class="d-flex align-self-center me-3" width="60">
                                      <span class="badge bg-success badge-dot"></span>
                                    </div>
                                    <div class="pt-1" id="mcuarto">
                                      <p class="fw-bold mb-0">Marie Horwitz</p>
                                      <p class="small text-muted">Hello, Are you there?</p>
                                    </div>
                                  </div>
                                  <div class="pt-1">
                                    <p class="small text-muted mb-1">Just now</p>
                                    <span class="badge bg-danger rounded-pill float-end">3</span>
                                  </div>
                                </a>
                              </li>
                              <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                  <div class="d-flex flex-row">
                                    <div>
                                      <img
                                        src="assets/images/logos/user.png"
                                        alt="avatar" class="d-flex align-self-center me-3" width="60">
                                      <span class="badge bg-warning badge-dot"></span>
                                    </div>
                                    <div class="pt-1">
                                      <p class="fw-bold mb-0">Alexa Chung</p>
                                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                  </div>
                                  <div class="pt-1">
                                    <p class="small text-muted mb-1">5 mins ago</p>
                                    <span class="badge bg-danger rounded-pill float-end">2</span>
                                  </div>
                                </a>
                              </li>
                              <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                  <div class="d-flex flex-row">
                                    <div>
                                      <img
                                        src="assets/images/logos/user.png"
                                        alt="avatar" class="d-flex align-self-center me-3" width="60">
                                      <span class="badge bg-success badge-dot"></span>
                                    </div>
                                    <div class="pt-1">
                                      <p class="fw-bold mb-0">Danny McChain</p>
                                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                  </div>
                                  <div class="pt-1">
                                    <p class="small text-muted mb-1">Yesterday</p>
                                  </div>
                                </a>
                              </li>
                              <li class="p-2 border-bottom">
                                <a href="#!" class="d-flex justify-content-between">
                                  <div class="d-flex flex-row">
                                    <div>
                                      <img
                                        src="assets/images/logos/user.png"
                                        alt="avatar" class="d-flex align-self-center me-3" width="60">
                                      <span class="badge bg-danger badge-dot"></span>
                                    </div>
                                    <div class="pt-1">
                                      <p class="fw-bold mb-0">Ashley Olsen</p>
                                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                                    </div>
                                  </div>
                                  <div class="pt-1">
                                    <p class="small text-muted mb-1">Yesterday</p>
                                  </div>
                                </a>
                              </li>

                            </ul>
                          </div>
        
                        </div>
        
                      </div>
        
                      <div class="col-md-6 col-lg-7 col-xl-8">
        
                        <div class="pt-3 pe-3" data-mdb-perfect-scrollbar="true"
                          style="position: relative; height: 400px">
        
                          <div class="d-flex flex-row justify-content-start">
                            <img src="assets/images/logos/user.png"
                              alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                              <p class="small p-2 ms-3 mb-1 rounded-3" id="mquinto" style="background-color: #f5f6f7;">Lorem ipsum
                                dolor
                                sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua.</p>
                              <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                            </div>
                          </div>
        
                          <div class="d-flex flex-row justify-content-end">
                            <div>
                              <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Ut enim ad minim veniam,
                                quis
                                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                            </div>
                            <img src="assets/images/logos/user.png"
                              alt="avatar 1" style="width: 45px; height: 100%;">
                          </div>
        
                          <div class="d-flex flex-row justify-content-start">
                            <img src="assets/images/logos/user.png"
                              alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                              <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Duis aute
                                irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                              </p>
                              <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                            </div>
                          </div>
        
                          <div class="d-flex flex-row justify-content-end">
                            <div>
                              <p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">Excepteur sint occaecat
                                cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                              <p class="small me-3 mb-3 rounded-3 text-muted">12:00 PM | Aug 13</p>
                            </div>
                            <img src="assets/images/logos/user.png"
                              alt="avatar 1" style="width: 45px; height: 100%;">
                          </div>
        
                          <div class="d-flex flex-row justify-content-start">
                            <img src="assets/images/logos/user.png"
                              alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                              <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">Sed ut perspiciatis
                                unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam.</p>
                              <p class="small ms-3 mb-3 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                            </div>
                          </div>
        



        
                        </div>
                        <br>
                        <div class="text-muted d-flex justify-content-start align-items-center pe-3 pt-3 mt-2" id="msexto">
                          <img src="assets/images/logos/user.png"
                            alt="avatar 3" style="width: 40px; height: 100%;">
                          <input type="text" class="form-control form-control-lg" id="exampleFormControlInput2"
                            placeholder="Type message">
                          <a class="ms-1 text" href="#!" data-bs-toggle="modal" data-bs-target="#global-modal"><i class="fas fa-paperclip"></i></a>
                          <a class="ms-3 text" href="#!" data-bs-toggle="modal" data-bs-target="#global-modal"><i class="fas fa-smile"></i></a>
                          <a class="ms-3" href="#!" data-bs-toggle="modal" data-bs-target="#global-modal"><i class="fas fa-paper-plane"></i></a>
                        </div>
        
                      </div>
                    </div>
        
                  </div>
                </div>
        
              </div>
            </div>
        
          </div>
        </section>
        <div class="row">
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://linkedin.dtmonsterleads.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">DT Monster Leads</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.12.0/js/bootstrap-tour-standalone.js"></script>
  <script src="menscript.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
</body>

</html>