<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda online</title>
</head>
<body>
    <div class="container">
        <h1>Verificar compra</h1> 
    </div>
    <div class="revisioncarro">
        <h2>Revisión del Carrito</h2>
        <p>Por favor, verifica los productos seleccionados en tu carrito antes de confirmar la orden.</p>
        <div class="product">
            <img src="imag/buble.jpg" alt="Producto 1">
            <div class="nameproduct"> <h3>Nombre producto</h3></div>
            <button type="button">Eliminar</button>
        </div>
        <div class="product">
            <img src="imag/quaker.jpg" alt="Producto 2">
            <div class="nameproduct"> <h3>Nombre producto</h3></div>
            <button type="button">Eliminar</button>
        </div>
        <div class="product">
            <img src="imag/sansung.jpg" alt="Producto 3">
            <div class="nameproduct"> <h3>Nombre producto</h3></div>
            <button type="button">Eliminar</button>
        </div>
        <div id="total">
            Total a pagar: $100
        </div>
        <button type="button" class="confirm-button" onclick="confirmarCarrito()">Confirmar carrito</button>
    </div>
    <div id="order-confirmation-container">
        <h2>Confirmación de la Orden</h2>
        <p>Por favor, revisa los detalles de tu orden antes de confirmarla.</p>
        <div class="product">
            <img src="imag/buble.jpg" alt="Producto 1">
            <div>
                <h3>Nombre del Producto</h3>
                <p>Información del Producto</p>
            </div>
        </div>
        <div class="product">
            <img src="imag/quaker.jpg" alt="Producto 2">
            <div>
                <h3>Nombre del Producto</h3>
                <p>Información del Producto</p>
            </div>
        </div>
        <div class="product">
            <img src="imag/sansung.jpg" alt="Producto 3">
            <div>
                <h3>Nombre del Producto</h3>
                <p>Información del Producto</p>
            </div>
        </div>
        <button type="button" onclick="confirmarOrden()">Confirmar orden</button>
        <p>Estado pedido: Pendiente</p>
    </div>
    <div class="verification-container">
        <h2>Verificación de datos</h2>
        <p>Antes de confirmar la orden, verifica la dirección de envío y los detalles de pago.</p>
        <form class="form-container" action="procesar.php" method="post">
            <div class="column">
                <label for="nombre">Nombre:</label>
                <input class="controls" type="text" id="nombre" name="nombre" required><br>
                
                <label for="apellidos">Apellidos:</label>
                <input class="controls" type="text" id="apellidos" name="apellidos" required><br>
                
                <label for="telefono">Teléfono:</label>
                <input class="controls" type="tel" id="telefono" name="telefono" required><br>
                
                <label for="direccion">Dirección:</label>
                <input class="controls" type="text" id="direccion" name="direccion" required><br>
                
                <label for="municipio">Municipio:</label>
                <input class="controls" type="text" id="municipio" name="municipio" required><br>
                
                <label for="departamento">Departamento:</label>
                <input class="controls" type="text" id="departamento" name="departamento" required><br>
            </div>
            <div class="column">
                <label for="documento">Documento:</label>
                <input class="controls" type="text" id="documento" name="documento" required><br>
                
                <label for="email">Email:</label>
                <input class="controls" type="email" id="email" name="email" required><br>
                
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input class="controls" type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>
            </div>
            <input class="button" type="submit" value="Enviar">
        </form>
    </div>
    <div class="confirmation-container">
        <button type="button">Confirmar compra</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
