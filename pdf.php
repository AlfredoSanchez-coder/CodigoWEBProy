<?php
    require ('fpdf/fpdf.php');

    class PDF extends FPDF{
        //Cabecera de página
        function header(){
            //Arial bold 15
            $this->SetFont('Arial','B',15);
            //Logo
            $this->Image('logo.png',10, 8, 25);
            $w = $this->GetStringWidth('Comprobante')+6;
            
            $this->SetX((210-$w)/2);

            $this->SetDrawColor(0, 0, 0);
            //color de fondo
            $this->SetFillColor(0,14,112);
            //color del texto
            $this->SetTextColor(255,255,255);
            //Grosor del borde (1 mm)
            $this->SetLineWidth(1);
            // Título
            $this->Cell($w,9,'Comprobante', 1, 1, 'C', true);

            //Arial italic 8
            $this->SetFont('Arial','I',8);
            //Color del texto en gris
            $this->SetTextColor(128);
            $this->SetX(-15);
            //Número de página
            $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}', 0, 0, 'C');

            //Salto de línea
            $this->Ln(20);
        }

        //Pie de página
        function footer(){
            $this->SetY(-30);
            $this->SetFillColor(0,14,112);
            $this->Cell(0, 20, utf8_decode('© 2023 Todos los derechos reservados ELECTROFEST'), 0, 1, 'C', true);
        }

        function tituloSeccion($tituloSeccion){
            //Arial 12
            $this->SetFont('Arial','',12);
            //color de fondo
            $this->SetFillColor(0,14,112);
            //color del texto
            $this->SetTextColor(255,255,255);
            //Título
            $this->Cell(0, 6, utf8_decode($tituloSeccion), 0, 1, 'L', true);
            $this->Ln(4);
        }

        function folio($folio){
            $this->SetFont('Arial','',12);

            $this->SetFillColor(67, 21, 129);
            $this->SetTextColor(255,255,255);

            $this->Cell(0, 6, 'Folio: '.$folio, 0, 1, 'R', true);
            $this->Ln(4);
        }
        //Imprime los datos personales del cliente

        function datosPersonales($nombre, $apePa, $apeMa, $curp, $correo){
            //Arial 12
            $this->SetFont('Arial','',12);
            
            $this->SetFillColor(108,91,200);

            $this->Cell(0, 6, utf8_decode('Nombre: '.$nombre), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Apellido Paterno: '.$apePa), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Apellido Materno: '.$apeMa), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, 'CURP: '.$curp, 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Correo: '.$correo), 0, 1, 'L', true);
            $this->Ln(4);
        }

        function direccion($calle, $numero, $cp, $alcaldia, $entidadFederativa){
            $this->SetFont('Arial','',12);

            $this->SetFillColor(108,91,200);

            $this->Cell(0, 6, utf8_decode('Calle: '.$calle), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Número: '.$numero), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Código Postal: '.$cp), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Alcaldía: '.$alcaldia), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Entidad Federativa: '.$entidadFederativa), 0, 1, 'L', true);
            $this->Ln(4);
        }

        function evento($tipo, $fecha, $hora, $lugar, $noPersonas, $dj, $tipoMenu){
            $this->SetFont('Arial','',12);
            
            $this->SetFillColor(108,91,200);

            $this->Cell(0, 6, utf8_decode('Tipo de evento: '.$tipo), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, 'Fecha: '.$fecha, 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, 'Hora: '.$hora, 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Lugar: '.$lugar), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Número de personas: '.$noPersonas), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('DJ: '.$dj), 0, 1, 'L', true);
            $this->Ln(2);

            $this->Cell(0, 6, utf8_decode('Tipo de menú: '.$tipoMenu), 0, 1, 'L', true);
            $this->Ln(4);
        }
    }

    // Datos de conexión a la DB
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_register";

    // Conexion con la DB
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexion
    if ($conn->connect_error) {
        die("Error de conexion: " . $conn->connect_error);
    }
    
    $folio = $_POST['folio'] ?? NULL;
    // Recuperar los datos que se encuntran en la tabla 'contrato'
    $sql = "SELECT * FROM contrato WHERE folio = '$folio'";

    $result = $conn->query($sql);

    if($result -> num_rows > 0){
        // Crear arreglo con los datos de la tabla
        $row = $result->fetch_assoc();
        $folio = $row["Folio"];
        $nombre = $row["Nombre"];
        $apePa = $row["ApellidoP"];
        $apeMa = $row["ApellidoM"];
        $curp = $row["CURP"];
        $correo = $row["Correo"];

        $tel = $row["tel"];

        $calle = $row["Calle"];
        $numero = $row["Numero"];
        $cp = $row["CP"];
        $alcaldia = $row["alcaldia"];
        $entidadFederativa = $row["entidad"];
        $tipo = $row["tipoeve"];
        $fecha = $row["fecha"];
        $hora = $row["horario"];
        $lugar = $row["Lugar"];
        $noPersonas = $row["numP"];
        $dj = $row["Dj"];
        $tipoMenu = $row["tipomenu"];
    } else {
        $_SESSION['folio'] = "(".$folio. ") No se encontró el folio ingresado :(";
        header("Location: ../PWebDJ-master1/comprobante.php");
    }


    $pdf = new PDF(); //Instanciamos la clase PDF
    $pdf->AliasNBPages(); //Agregamos el número de páginas
    $pdf->AddPage(); //Creamos una página
    $pdf->SetFont('Arial','B',16); //Elegimos fuente, tipo, tamaño

    $pdf->folio($folio);

    $pdf->tituloSeccion('Datos Personales'); //Agregamos el título de la sección
    $pdf->datosPersonales($nombre, $apePa, $apeMa, $curp, $correo); //Agregamos los datos personales
    $pdf->tituloSeccion('Dirección');
    $pdf->direccion($calle, $numero, $cp, $alcaldia, $entidadFederativa);

    $pdf->tituloSeccion('Evento');
    $pdf->evento($tipo, $fecha, $hora, $lugar, $noPersonas, $dj, $tipoMenu);

    $conn->close();
    $pdf->Output('D', $folio.'.pdf');


?>