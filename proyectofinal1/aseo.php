<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aseo</title>
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
             <img src="imagenes/dersa.png" alt="imagen">
             <h3>Detergente Polvo Dersa</h3>
             <p>Bicarbonto Manzana 4000 gr</p>
             <p>Precio: $20.000</p>
              <a href="#" class="boton-carrito">Agregar al Carrito</a>
            </div>
        
            <div class="producto">
             <img src="imagenes/rosal.png" alt="Imagen 2">
             <h3>Papel Higiénico Rosal Triple Hoja </h3>
             <p>X 4 Unds</p>
             <p>Precio: $6.500</p>
              <a href="#" class="boton-carrito">Agregar al Carrito</a>
            </div>
              

            <div class="producto">
             <img src="imagenes/shampoo.png" alt="Imagen 3">
             <h3>Shampoo Bebé Johnson's Manzanilla</h3>
             <p>X 750 Ml</p>
             <p>Precio: $30.000</p>
              <a href="#" class="boton-carrito">Agregar al Carrito</a>
            </div>


            <div class="producto">
             <img src="imagenes/super riel.png" alt="Imagen 3">
             <h3>Limpiador Súper Riel Multiusos</h3>
             <p>X 925 ML</p>
             <p>Precio: $4.800</p>
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