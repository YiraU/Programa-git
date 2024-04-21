
    function agregarAlCarrito(nombre, precio) {
      // Crear un elemento li para representar el producto en el carrito
      var producto = document.createElement("li");
      producto.textContent = nombre + " - $" + precio;

      // Agregar el producto al carrito
      document.getElementById("carrito").appendChild(producto);
    }
  