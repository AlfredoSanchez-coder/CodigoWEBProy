<?php
     
     include 'conexion_be.php';


     $nombre_completo = $_POST['nombre_completo'];
     $correo = $_POST['correo'];
     $usuario = $_POST['usuario'];
     $contrasena = $_POST['contrasena'];
    /* $contrasena = hash('sha512',$contrasena);*/

     $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
     VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";

    //verificar que no se repita en BD
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM  usuarios WHERE correo='$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
        <script>
        alert("El correo ya esta registrado, intenta de nuevo");
        window.location= "../PWebDJ-master1/index.php";
        </script>
        ';
        exit();
    }
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM  usuarios WHERE usuario='$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
        <script>
        alert("El usuario ya esta registrado, intenta de nuevo");
        window.location= "../PWebDJ-master1/index.php";
        </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion , $query);


     if($ejecutar){
        echo'
        <script>
      
        window.location = "../PWebDJ-master1/index.php";
        </script>
        ';
     }

?>