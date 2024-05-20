<?php
// Simulación de datos de productos
$productos = [
    ['id' => 1, 'nombre' => 'Nombre producto', 'imagen' => 'imagb/camisa.jpg'],
    ['id' => 2, 'nombre' => 'Nombre producto', 'imagen' => 'imagb/chaqueta.jpg'],
    ['id' => 3, 'nombre' => 'Nombre producto', 'imagen' => 'imagb/zapatos.jpg'],
    // Agrega más productos según sea necesario
];

// Procesar eliminación de productos
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
    $idsAEliminar = $_POST['productos'] ?? [];
    $productos = array_filter($productos, function($producto) use ($idsAEliminar) {
        return !in_array($producto['id'], $idsAEliminar);
    });
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Favoritos</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <header>
        <h1>Gestionar Favoritos</h1>
    </header>
    <main>
    <div class="verificar-compra-container">
            <button class="verificar-compra" onclick="window.location.href='http://localhost/yudi/'">Verificar Compra</button>
        </div>
        <form method="post" id="form-productos">
            <ul id="lista-productos">
                <?php foreach ($productos as $producto): ?>
                    <li id="producto-<?php echo $producto['id']; ?>">
                        <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                        <span><?php echo $producto['nombre']; ?></span>
                        <button type="button" onclick="comprarProducto(<?php echo $producto['id']; ?>)">Comprar Ahora</button>
                        <button type="button" onclick="agregarAlCarrito(<?php echo $producto['id']; ?>)">Agregar al Carrito</button>
                        <button type="button" onclick="notificarProducto(<?php echo $producto['id']; ?>)">Notificar Producto</button>
                        <button type="button" onclick="eliminarProducto(<?php echo $producto['id']; ?>)">Eliminar</button>
                        <button type="button" class="eliminar-equis" data-id="<?php echo $producto['id']; ?>">X</button>
                        <input type="checkbox" name="productos[]" value="<?php echo $producto['id']; ?>" class="eliminar">
                    </li>
                <?php endforeach; ?>
            </ul>
            <input type="submit" name="eliminar" value="Eliminar por intervalo">
        </form>
    </main>
</body>
</html>




