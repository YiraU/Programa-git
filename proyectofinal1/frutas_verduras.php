<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas y Verduras</title>
    <link rel="stylesheet" href="style.css">
</head>



<body>
 
    <header>
        <a href="index.php">
        <img src="imagenes\Logo de esquina.png" class="Logo1">
        <img src="imagenes\Logo de proyecto.png" class="Encabezado">
        <img src="imagenes\Logo lado derecho.png" class="Logo2">
        </a>
        <!-- -->
        
   
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

       <form class="barra_busqueda">
            <input type="text" placeholder="Buscar productos...">
            <button type="submit">Buscar</button>
        </form>

    </header>

    <main>
        <a href="categorias.php" class="boton-volver">&#8592; Regresar</a>
        <h2>Productos disponibles</h2>
        <div class="cuadricula">
         <div class="producto">
             <img src="imagenes/manzanaRoja.png" alt="imagen">
             <h3>Manzana Roja</h3>
             <p>1 Und</p>
             <p>Precio: $1.200</p>
              <a href="#" class="boton-carrito">Agregar al Carrito</a>
            </div>
        
            <div class="producto">
             <img src="imagenes/Melon.jpg" alt="Imagen 2">
             <h3>Melon Comun </h3>
             <p>1 Und</p>
             <p>Precio: $2.500</p>
              <a href="#" class="boton-carrito">Agregar al Carrito</a>
            </div>
              

            <div class="producto">
             <img src="imagenes/Piña.jpg" alt="Imagen 3">
             <h3>Piña Oro Miel</h3>
             <p>500 gr</p>
             <p>Precio: $3.00</p>
              <a href="#" class="boton-carrito">Agregar al Carrito</a>
            </div>


            <div class="producto">
             <img src="imagenes/platano.jpg" alt="Imagen 3">
             <h3>Platano Verde</h3>
             <p>1 Und</p>
             <p>Precio: $1.000</p>
              <a href="#" class="boton-carrito">Agregar al Carrito</a>
          </div>

          <div class="producto">
             <img src="imagenes/tomate.jpg" alt="Imagen 3">
             <h3>Tomate Chonto</h3>
             <p>500 gr</p>
             <p>Precio: $1.800</p>
              <a href="#" class="boton-carrito">Agregar al Carrito</a>
          </div>

        </div>
      
    </main>
    <br>
<br>
<br>

    <footer>
        <p>Derechos de autor 2023 | Mi pagina web</p>
    </footer>

</body>

</html>