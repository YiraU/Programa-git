<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario de Pago</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
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

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Imagen producto</th>
									<th class="product-name">Nombre</th>
									<th class="product-price">Precio</th>
									<th class="product-quantity">Cantidad</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="imagenes/manzanaRoja.png" alt=""></td>
									<td class="product-name">Manzana roja</td>
									<td class="product-price">$85</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="imagenes/Melon.jpg" alt=""></td>
									<td class="product-name">Melon</td>
									<td class="product-price">$70</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="imagenes/Piña.jpg" alt=""></td>
									<td class="product-name">Piña oro miel</td>
									<td class="product-price">$35</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Precio</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>$500</td>
								</tr>
								<tr class="total-data">
									<td><strong>Envio: </strong></td>
									<td>$45</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>$545</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="Carrito_compras.php" class="boxed-btn">Actualización de la compra</a>
							<a href="Carrito_compras.php" class="boxed-btn black">Verificar</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Aplicar cupón</h3>
						<div class="coupon-form-wrap">
							<form action="Carrito_compras.php">
								<p><input type="text" placeholder="Cupón"></p>
								<p><input type="submit" value="Aplicar"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
    
    <footer>
        <p>Derechos de autor 2023 | Mi pagina web</p>
    </footer>

</body>
</html>