<!DOCTYPE html>
<html lang="es">
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

<div class="contenedor">

        <div class="formulario_contacto">
            <img src="imagenes\contacte_con_nosotros.jpg" class="contenedor">
            <p>Teléfono: 1234-5678</p>
            <p>Email: Supermercadomd@gmail.com</p>
            <p>Sitio web: Superlamanodedios.com</p>
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <script src="scripts.js"></script>
        </div>

        <div class="formulario_registro">
            <form action="insertarDatos.php" method="post">
                <h2>Escribanos</h2>
                <input type="text" id="name" name="name" placeholder="Nombre" required>
                <input type="text" id="lastname" name="lastname" placeholder="Apellido" required>
                <input type="email" id="email" name="email" placeholder="Correo" required>
                <textarea id="message" name="message" placeholder="Mensaje" required></textarea>
                <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
    
<footer>
    <p>Derechos de autor 2023 | Mi pagina web</p>
</footer>

</body>
</html>