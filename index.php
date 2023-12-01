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
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper2" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    
    <div class="body-wrapper">
      <!--  Header Start -->

      <!--  Header End -->

      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        
        <div class="row">
          <div class="col-md-8">
            <img src="assets/images/logos/logo.png" alt="" class="imagenlog" width="230">
          </div>
          <div class="col-md-4">
            <!-- ---------------------start Custom Modal---------------- -->
            <div class="button-group" bis_skin_checked="1">
              <div id="login-modal" class="modal fade" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
                <div class="modal-dialog modal-dialog-scrollable modal-lg" bis_skin_checked="1">
                  <div class="modal-content" bis_skin_checked="1">
                    <div class="modal-body" bis_skin_checked="1">
                      <div class="text-center mt-2 mb-4" bis_skin_checked="1">
                        <img src="assets/images/logos/mail1.jpg" alt="" class="imagenlog" width="500">
                        <h2 class="tittlemodal">Reg&iacute;strate</h2>

                        <form class="" action="" method="post">
                          <div class="mb-3" bis_skin_checked="1">
                            <label for="username" class="newlabel">Nombre</label>
                            <input class="form-control" type="text" name="nombre" id="username" required="" placeholder="Michael Zenaty">
                          </div>
                          <div class="mb-3" bis_skin_checked="1">
                            <label for="username" class="newlabel">Direcci&oacute;n de Email</label>
                            <input class="form-control" type="email" name="correo" id="emailaddress" required="" placeholder="john@deo.com">
                          </div>
                          <div class="mb-3" bis_skin_checked="1">
                            <label for="username" class="newlabel">Numero Telef&oacute;nico</label>
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
            <button type="button" class="btn btn-light-warning text-warning btn-lg px-4 fs-4 font-medium" data-bs-toggle="modal" data-bs-target="#login-modal" title="Opciones del Sistema">
              Settings <i class="fa fa-user head"></i>
            </button>
            <a href="https://home.dtmonsterleads.com/" type="button" class="btn btn-light-warning text-warning btn-lg px-4 fs-4 font-medium" title="Salir de la Prueba">
              Logout <i class="fa fa-sign-out head"></i>
            </a>
            </div>
          <!-- ---------------------end Custom Modal---------------- -->
          <!-- ---------------------start Custom Modal---------------- -->
                      <div id="start-modal" class="modal fade" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg" bis_skin_checked="1">
                          <div class="modal-content" bis_skin_checked="1">
                            <div class="modal-body" bis_skin_checked="1">
                              <div class="text-center mt-2 mb-4" bis_skin_checked="1">
                                <img src="assets/images/logos/welcome.jpg" alt="" class="imagenlog" width="750"> 
                                <a type="button" class="btn btn-info bluedos" href="project.php#openModal" data-toggle="tooltip" title="Clic para Ingresar a la Prueba"><i class="fa fa-medal" aria-hidden="true" ></i>Entrar como Invitado<i class="fa fa-cog dos" aria-hidden="true"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
          <!-- ---------------------end Custom Modal---------------- -->
          </div>
        </div>
       </div>
      <div class="container-fluid prin">
        <!--  Row 1 -->
        <div class="row arranque">
          <div class="col-lg-6 inicio">
            <span class="header choice">Choose the seat you wish to manage.</span>
            <img src="assets/images/logos/illustration.png" alt="" class="illustra">
          </div> 
           <div class="col-lg-6 inicio">
            <i class="fa fa-user-secret"></i><span class="header dig">DT Marketing Digital</span><i class="fa fa-sign-out"></i>
            
            <form>
              <div class="input-group mt-4">
                <input class="form-control" placeholder="Search seats here...">
                <span class="input-group-append bg-white">
                   <i class="fa fa-search"></i>
                </span>
            </div>
            </form>
            <a type="button" class="btn btn-info blue" href="project.php#openModal" title="Clic para Ingresar a la Prueba"><i class="fa fa-medal" aria-hidden="true"></i>Entrar como Invitado<i class="fa fa-cog dos" aria-hidden="true"></i></a>
          </div>
        </div> 
 

        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://linkedin.dtmonsterleads.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">DT Monster Leads</a></p>
        </div>
      </div>
    </div>
  </div>
 
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script>
    $(document).ready(function()
    {
       $("#start-modal").modal("show");
    });
  </script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>