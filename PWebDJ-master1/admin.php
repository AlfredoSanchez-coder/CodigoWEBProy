<?php
//seguridad de sessiones paginacion
session_start();
$varsesion = $_SESSION['correo'];
/*$varse = $_SESSION['id'];*/
if($varsesion==null || $varsesion='' /*|| $varse==null || $varse=''*/){
  echo "no tienes acceso";
  die();
}
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
          <a class="navbar-brand">
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

      <section class="subscribe_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h2>
                Administrador<br>
                <span>
                  ELECTRO FEST
                </span>
              </h2>
            </div>
            <div class="col-md-8">
              <form action="">
                <input type="text" placeholder="Introduce CURP o folio de contrato">
                <button>
                  Buscar
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <br><br>
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">

            <h6>
              Administración de registros y datos del usuario
            </h6>

            
            <div class="custom_heading-container">
              <h2>
                Información
              </h2>
              <hr>
            </div>

            <div>
              <br><br><br><br><br>
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