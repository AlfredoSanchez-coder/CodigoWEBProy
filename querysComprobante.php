<?php
    // obtenemos el folio del usuario, con el cual se hara la consulta a la tabla 'contrato', y los
    // datos recuperados apareceran en comprobante.php

    // Iniciar sesion
    session_start();


    include 'conexion_be.php';
    $folio = $_POST['folio'];
    $conexion = mysqli_connect("localhost","root","","login_register");

    // Verificar la conexion
    if(!$conexion){
        die("Error de conexion: ".mysqli_connect_error());
    }

    // Realizar la consulta
    $sql = "SELECT * FROM contrato WHERE folio = '$folio'";
    $result = mysqli_query($conexion, $sql);

    // Verificar el resultado
    if($result -> num_rows > 0){
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

        $_SESSION['folio'] = $folio;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apePa'] = $apePa;
        $_SESSION['apeMa'] = $apeMa;
        $_SESSION['curp'] = $curp;
        $_SESSION['correo'] = $correo;
        $_SESSION['tel'] = $tel;
        $_SESSION['calle'] = $calle;
        $_SESSION['numero'] = $numero;
        $_SESSION['cp'] = $cp;
        $_SESSION['alcaldia'] = $alcaldia;
        $_SESSION['entidadFederativa'] = $entidadFederativa;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['fecha'] = $fecha;
        $_SESSION['hora'] = $hora;
        $_SESSION['lugar'] = $lugar;
        $_SESSION['noPersonas'] = $noPersonas;
        $_SESSION['dj'] = $dj;
        $_SESSION['tipoMenu'] = $tipoMenu;  

        // Redirigir a comprobante.php
        header("Location: ../PWebDJ-master1/comprobante.php");

        //Prueba (mandar a pdf y que pdf regrese a comprobante.php)
        //header("Location: ../pdf/pdf.php");


    } else {
        // Redirigir a comprobante.php
        $_SESSION['folio'] = "(".$folio. ") No se encontró el folio ingresado :(";
        header("Location: ../PWebDJ-master1/comprobante.php");
    }

    // Cerrar la conexion
    mysqli_close($conexion);
?>