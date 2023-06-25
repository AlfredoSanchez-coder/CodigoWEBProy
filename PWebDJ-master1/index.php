<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <link rel="stylesheet" href="/css/csslogin.css">
  <link rel="stylesheet" href="css/csslogin.css">
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              ELEMENTS
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
                  <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="InfoEventos.html">Eventos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contrato.html">Contratación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="comprobante.html">Comprobante</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Iniciar Sesión</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!--Seccion del logiun-->
  <main>

    <div class="Contenedor">
      <div class="caja_trasera">
        <div class="caja_trasera_log">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>Inicia sesión para ingresar a la página</p>
          <button id="btn_ini_s">Iniciar</button>          
        </div>
        <div class="caja_trasera_reg">
          <h3>Aún no tienes cuenta</h3>
          <p>Realiza el registro para ingresar a la página</p>
          <button id="btn_reg">Registro</button>          
        </div>
      </div>
     <!--Formulario login y resgistro-->

      </script>
      <div class="contenedor_log_reg">
        <!--Login-->
         <form action="../php/login_usuario.php" method="POST"class="formulario_log">
          <h2>Iniciar sesión</h2>
          <input type="text" placeholder="Correo electronico" required="" name="correo">
          <input type="password" placeholder="Contraseña" required="" name="contrasena">
          <button >Entrar</button>
         </form>
         <!--Registro-->
         <form action="../php/registro_usuario.php" method="POST" class="formulario_reg">
          <h2>Registrarse</h2>
          <input type="text" placeholder="Nombre completo" required="" name="nombre_completo">
          <input type="text" placeholder="Correo electronico" required="" name="correo">
          <input type="text" placeholder="usuario" required="" name="usuario">
          <input type="password" placeholder="Contraseña"required="" name="contrasena">
          <button>Registrarse</button>
         </form>
      </div>
      <br><br><br>

    </div>
  </main>
  <!--Seccion del logiun-->
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
  <script type="text/javascript" src="js/scripts.js"></script>

  <script src="/js/scripts.js"></script>
</body>
</html>