<?php


  $servidor = 'localhost';
  $basedatos = 'registro';
  $usuario = 'root';
  $contrasena = '';



  try {
    $estandar = "mysql:host=$servidor;dbname=$basedatos;charset=utf8mb4";
    $conexion = new PDO($estandar,$usuario,$contrasena);
    //echo "conexion exitosa";
  }   catch (PDOException $th) {
    echo "ERROR EN LA CONEXION";
   }



?>