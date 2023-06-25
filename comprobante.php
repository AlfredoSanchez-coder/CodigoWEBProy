<?php
// Inicia sesion
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="images/logo.png">

  <title>ELECTRO FEST</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />



</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              ELECTRO FEST
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                <a class="nav-link" href="inde.php">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="infoEventos.php">Eventos</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="contrato.php">Contratación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="comprobante.php">Comprobante</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../php/cerrar_se.php">Cerrar sesion</a>
                </li>
              </ul>
            </div>
            
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <h6>
              Servicios ELECTRO FEST para todo tipo de eventos
            </h6>
            
            <div class="custom_heading-container">
              <h2>
                Tu contrato
              </h2>
              <hr>
            </div>

            <br><br>
            <hr>

            <!-- Obtencion del Folio -->
            <div class="detail-box">
              <?php
                $folio = $_SESSION['folio'] ?? NULL;
                $nombre = $_SESSION['nombre'] ?? NULL;
                $apePa = $_SESSION['apePa'] ?? NULL;
                $apeMa = $_SESSION['apeMa'] ?? NULL;
                $curp = $_SESSION['curp'] ?? NULL;
                $correo = $_SESSION['correo'] ?? NULL;
                $tel = $_SESSION['tel'] ?? NULL;
                $calle = $_SESSION['calle'] ?? NULL;
                $numero = $_SESSION['numero'] ?? NULL;
                $cp = $_SESSION['cp'] ?? NULL;
                $alcaldia = $_SESSION['alcaldia'] ?? NULL;
                $entidadFederativa = $_SESSION['entidadFederativa'] ?? NULL;
                $tipo = $_SESSION['tipo'] ?? NULL;
                $fecha = $_SESSION['fecha'] ?? NULL;
                $hora = $_SESSION['hora'] ?? NULL;
                $lugar = $_SESSION['lugar'] ?? NULL;
                $noPersonas = $_SESSION['noPersonas'] ?? NULL;
                $dj = $_SESSION['dj'] ?? NULL;
                $tipoMenu = $_SESSION['tipoMenu'] ?? NULL;

              ?>

              <form action = "../php/querysComprobante.php" method="POST">
              <h5>Ingresa tu folio:</h5>
              <input type="text" placeholder="Folio" required="" name="folio">
              <input type="submit" value="Consultar">
              
              </form>
              <hr><br>
            <h5>Folio: <?php echo $folio ?></h5>
            <hr><br>

            </div>

            <div>
              <h5>Datos personales</h5>
              <hr>
              
              <div>
                <h7>Nombre: <?php echo $nombre ?> </h7><br>
                <h7>Apellido paterno: <?php echo $apePa  ?> </h7><br>
                <h7>Apellido materno:  <?php echo $apeMa ?></h7><br>
                <h7>Correo electrónico: <?php echo $correo ?> </h7><br>
              </div>
              
              <br>
              <h5>Dirección</h5>
              <hr>
              
              <div>
                <h7>Calle: <?php echo $calle ?></h7><br>
                <h7>Número: <?php echo $numero ?></h7><br>
                <h7>CURP: <?php echo $curp ?> </h7><br>
                <h7>Codigo postal: <?php echo $cp ?> </h7><br>
                <h7>Alcaldía o municipio: <?php echo $alcaldia ?> </h7><br>
                <h7>Entidad federativa: <?php echo $entidadFederativa ?></h7><br>
              </div>
              
              <br>
              <h5>Evento </h5>
              <hr>
              
              <div>
                <h7>Fecha del evento: <?php echo $fecha ?> </h7><br>
                <h7>Horario: <?php echo $hora ?> </h7><br>
                <h7>Tipo evento: <?php echo $tipo ?> </h7><br>
                <h7>Lugar del evento: <?php echo $lugar ?> </h7><br>
                <h7>Número de personas: <?php echo $noPersonas ?> </h7><br>
                <h7>DJ: <?php echo $dj ?> </h7><br>
                <h7>Menú: <?php echo $tipoMenu ?> </h7><br>
              </div>
            </div>    
            <hr>      
            <!----<p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem
            </p>--->


            <!-- GENERAR PDF  --->
            <div>
              <form action = "../pdf/pdf.php" method="POST">
              <input type="hidden" required="" name="folio" value="<?php echo $folio ?>">
              <input type="submit" value="Generar y descargar comprobante">
              </form>
            </div>

            <hr>

          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end about section -->


  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_social">
        <div>
          <a href="">
            <img src="images/fb.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="images/twitter.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="images/linkedin.png" alt="">
          </a>
        </div>
        <div>
          <a href="">
            <img src="images/insta.png" alt="">
          </a>
        </div>
      </div>
      <div>
        <p>
          Los datos registrados estan protegidos por nuestra política de privacidad para brindarte un mejor servicio y atención de ELECTROFEST
        </p>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 Todos los derechos reservados
      <a href="">ELECTRO FEST</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</body>

</html>

<?php
  session_unset();
  session_destroy();
?>