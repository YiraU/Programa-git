<?php
include('Conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];



$sql = "INSERT INTO `contacto` (`Nombre`, `Correo`, `Telefono`, `Mensaje`) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
$conexion->exec($sql);

header('location: contacto.php');



?>
