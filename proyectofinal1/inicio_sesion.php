<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

 <header>
 <a href="index.php">
        <img src="imagenes\Logo de esquina.png" class="Logo1">
        <img src="imagenes\Logo de proyecto.png" class="Encabezado">
        <img src="imagenes\Logo lado derecho.png" class="Logo2">
        </a>

   <!--<a href="www.google.com">ir a google</a>-->
   <!--     -->
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




 <form action="insertarDatos2.php" method="post" class="formulario_contacto">

    <h3>Inicio de sesión</h3>
    <label>Usuario:</label>
    <input type="text" name="Usuario" required >
    <label>Clave:</label>
    <input type="email" name="Clave" required >
    
    </textarea>
    <input type="checkbox" class="check-box" id="terminos-condiciones" required>
    <label for="terminos-condiciones">Olvido usuario o clave</label>
    <input type="submit" value="Iniciar">
 </form>

    <br>
    <br>
    <br>
    <br>
    
 <footer>
        <p>Derechos de autor 2023 | Mi pagina web</p>
    </footer>

</body>
</html>