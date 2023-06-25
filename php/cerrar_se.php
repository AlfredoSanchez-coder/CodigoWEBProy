<?php
 include 'conexion_be.php'; 

             session_start();
             session_destroy();
             header('Location: ../PWebDJ-master1/index.html');
             
?>