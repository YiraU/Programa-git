<?php
include('Conexion.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contraseña'];


$sql = "INSERT INTO `usuarios registrados` (`Nombre`, `Apellidos`, `Correo`, `Telefono`, `Contraseña`) VALUES ('$nombre', '$apellidos', '$correo', '$telefono', '$contrasena')";
$conexion->exec($sql);

header('location: registro.php');



?>