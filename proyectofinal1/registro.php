<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
// Agrega cualquier lógica de PHP que necesites aquí
?>

 <header>
 <a href="index.php">
        <img src="imagenes\Logo de esquina.png" class="Logo1">
        <img src="imagenes\Logo de proyecto.png" class="Encabezado">
        <img src="imagenes\Logo lado derecho.png" class="Logo2">
        </a>


    <nav>
    <ul>
    <li><a href="categorias.php" class="barra_navegacion">Categorias</a></li>
    <li><a href="inicio_sesion.php" class="barra_navegacion">Inicio de sesión</a></li>
    <li><a href="registro.php" class="barra_navegacion">Registro</a></li>
    <li><a href="Contacto.php" class="barra_navegacion">Contacto</a></li>
    <li><a href="procesar.php" class="barra_navegacion">Procesar</a></li>
    <li><a href="Carrito_compras.php" class="carrito-compras">
        🛒 Carrito</a></li>
  </ul>
  </nav>
 </header>

 <!-- form -->

  <form action="insertarDatos.php" method="post"  class="formulario_registro">
    <h3>Formulario De Registro</h3>
    <label>Nombre:</label>
    <input type="text" name="nombre" required >
    <label>Apellidos:</label>
    <input type="text" name="apellidos" required >
    <label>Correo electronico:</label>
    <input type="email" name="correo" required >
    <label>Telefono:</label>
    <input type="tel" name="telefono" required >
    <label>Contraseña:</label>
    <input type="password" name="contraseña" required >
    <input type="checkbox" class="check-box" id="terminos-condiciones" required>
    <label for="terminos-condiciones">Acepto términos y condiciones</label>
    <input type="submit" value="Registrarse">
  </form>

<?php
// Puedes cerrar cualquier lógica de PHP aquí
?>

</body>
    
<footer>
    <p>Derechos de autor 2023 | Mi pagina web</p>
</footer>
</html>
