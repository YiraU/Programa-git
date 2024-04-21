<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario de Pago</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pago.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    

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
    <!-- Credit Card Payment Form - START -->
    <div class="cart-section mt-150 mb-150">
        
            <div class="row">
                <div class="col-xs-10 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <h3 class="text-center">Tarjeta de credito o debito</h3>
                                <img class="img-responsive cc-img" src="https://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>CARD NUMBER</label>
                                            <div class="input-group">
                                                <input type="tel" class="form-control" placeholder="Valid Card Number" />
                                                <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                            <input type="tel" class="form-control" placeholder="MM / YY" />
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group">
                                            <label>CV CODE</label>
                                            <input type="tel" class="form-control" placeholder="CVC" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>CARD OWNER</label>
                                            <input type="text" class="form-control" placeholder="Card Owner Names" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-warning btn-lg btn-block">Process payment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

    
        <div class="cart-section mt-150 mb-150">
            
                <div class="row">
                    <div class="col-xs-12 col-md-18">
                        <div class="card-container resumen-compra-container">
                            <div class="card-header header-container">
                                <h2>Resumen de la Compra</h2>
                            </div>
                            <form action="procesar.php" method="post" class="resumen-compra-form">
                                <div class="card-details">
                                    <label>N° Referencia de Pago:</label>
                                    <input type="text" name="referencia_pago" required>

                                    <label>Fecha:</label>
                                    <input type="date" name="fecha" required>

                                    <label>Datos de Envío:</label>
                                    <textarea name="datos_envio" required></textarea>

                                    <label>Nombre:</label>
                                    <input type="text" name="nombre" required>

                                    <label>Email:</label>
                                    <input type="email" name="email" required>

                                    <label>Dirección:</label>
                                    <input type="text" name="direccion" required>

                                    <label>Teléfono:</label>
                                    <input type="tel" name="telefono" required>
                                </div>

                                <div class="summary">
                                    <h3>Resumen</h3>
                                    <label>Subtotal:</label>
                                    <span>$100.00</span>

                                    <label>Descuento en Productos:</label>
                                    <span>$0.00</span>

                                    <label>Bolsa Plástica:</label>
                                    <span>$1.00</span>

                                    <label>Total:</label>
                                    <span>$101.00</span>
                                </div>

                                <div class="submit-button">
                                    <input type="submit" value="Confirmar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
        </div>
    
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>

</body>

<footer>
    <p>Derechos de autor 2023 | Mi pagina web</p>
</footer>

</html>