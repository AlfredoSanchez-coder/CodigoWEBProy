<?php
session_start();

    include 'conexion_be.php';

        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        /*$contrasena = hash('sha512',$contrasena);*/
       session_start();
        $_SESSION['correo']=$correo;


        $validar_log = mysqli_query($conexion, "SELECT * FROM usuarios  WHERE correo ='$correo' and contrasena='$contrasena'");
       /* $resultado=mysqli_query($conexion,$validar_log);   */ 
        $_SESSION['usuario']  = $correo;

        $filas=mysqli_fetch_array($validar_log);
        //ADMIN
      /*  $_SESSION['id']=$filas;*/
      if($filas['id']==6){
             header("Location: ../PWebDJ-master1/admin.php");
            exit;
        }else if (mysqli_num_rows($validar_log) > 0 ){
            header("Location:  ../PWebDJ-master1/inde.php");
            exit;
        }else{
            echo' 
            <script>
            alert("Por favor registrate o inicia sesión");
            window.location = "../PWebDJ-master1/index.php";
            </script>
            ';
            exit;
        }


?>