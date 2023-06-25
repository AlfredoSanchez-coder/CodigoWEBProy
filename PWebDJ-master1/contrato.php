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

  <title>ELECTRO FEST</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="icon" href="images/logo.png">
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="inde.php">
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

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="d-flex flex-column align-items-end">
        <div class="custom_heading-container">
          <hr>
          <h2>
            Llena tu contrato 
          </h2>
        </div>
      </div>
      <div class="layout_padding-top layout_padding2-bottom">
        <div class="row">
          <div class="col-md-7">
            <form action="">
              <div class="contact_form-container">
                <div>

                  <h5>Datos personales</h5>

                  <div>
                    <input type="text" placeholder="Nombre">
                  </div>
                  <div>
                    <input type="text" placeholder="Apellido paterno">
                  </div>
                  <div>
                    <input type="text" placeholder="Apellido materno">
                  </div>
                  <div>
                    <input type="text" placeholder="CURP">
                  </div>
                  <div>
                    <input type="email" placeholder="Correo electrónico">
                  </div>

                  <br><h5>Dirección:</h5>

                  <div>
                    <input type="text" placeholder="Calle">
                  </div>
                  <div>
                    <input type="text" placeholder="Número">
                  </div>
                  <div>
                    <input type="text" placeholder="Código Postal">
                  </div>
                  <div>
                    <input type="text" placeholder="Alcaldía o municipio">
                  </div>
                  <br>
                  <div class="row justify-content-start col-11">
                      <!--<label for="lang">Entidad federativa: </label>-->
                      <select  class="form-select form-select-sm"  aria-label=".form-select-sm example">
                        <option selected>Selecciona tu entidad federativa</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                      </select>
                  </div>

                  <br>
                  <h5>Evento:</h5>

                  <br>
                  <div class="row justify-content-start col-11">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected>Selecciona tu tipo de evento</option>
                      <option value="Bautizo">Bautizo</option>
                      <option value="Primera comunion">Primera comunión</option>
                      <option value="XV">XV años</option>
                      <option value="Boda">Boda</option>
                      <option value="Cumpleaños">Cumpleaños</option>
                      <option value="Otro">Otro (Describa en campo inferior)</option>
                    </select>
                  </div>
                  <br>
                  <div>
                    <input type="text" placeholder="De haber seleccionado la opcion otro, escriba su tipo de evento">
                  </div>

                  <br>
                  <div>
                    <input type="date" >
                  </div>
                  <div>
                    <input type="time">
                  </div>

                  <div>
                    <input type="text" placeholder="Lugar del evento">
                  </div>

                  <div>
                    <input type="text" placeholder="Numero de personas">
                  </div>

                  <div>
                    <input type="text" placeholder="DJ">
                  </div>
                  <br>
                  <div class="row justify-content-start col-11">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected>Selecciona tu tipo de menú</option>
                      <option value="Bautizo">Ejecutivo</option>
                      <option value="Primera comunion">Económico</option>
                    </select>
                  </div>

                  <!-------<div class="">
                    <input type="text" placeholder="Message" class="message_input">
                  </div>--->
                  <script>
                    function mostrarMensaje(){
                      alert("Para poder contratar el servicio necesitas registrarte o iniciar sesión");
                    }
                  </script>
                  <div class="mt-5">
                    <button type="submit" onclick="mostrarMensaje()">
                      Contratar
                    </button>
                    <button type="submit">
                      Limpiar campos
                    </button>
                  </div>
                </div>

              </div>

            </form>
          </div>
          <div class="col-md-5">
            <div class="map-box">
              <div id="map">
                <div class="map-responsive">
                  <iframe
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                    width="600" height="300" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-----------
      <div class="contact_items"> 
        <a href="">
          <div class="item ">
            <div class="img-box box-2">

            </div>
            <div class="detail-box">
              <p>
                +02 1234567890
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">

            </div>
            <div class="detail-box">
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-1">

            </div>
            <div class="detail-box">
              <p>
                t will be distracted by the readable
              </p>
            </div>
          </div>
        </a>
      </div>------->
    </div>
  </section>


  <!-- end contact section -->

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
          Los datos registrados estan protegidos por nuestra politíca de privacidad para brindarte un mejor servicio y atención de ELECTROFEST
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