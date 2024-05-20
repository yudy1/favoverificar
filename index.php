<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar a favoritos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Agregar a favoritos</h1>
    </header>
    
    <main>
        <div id="button-container">
            <button id="login-btn" onclick="showLoginForm()">Iniciar Sesión</button>
            <button id="manage-favorites-btn" onclick="window.location.href='http://localhost/gesfavo/'">Gestionar Favoritos</button>
        </div>
        <div id="login-form">
            <h2>Iniciar Sesión</h2>
            <form onsubmit="login(event)">
                <input type="text" id="username" placeholder="Nombre de usuario" required>
                <input type="password" id="password" placeholder="Contraseña" required>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
        <div id="products">
            <div class="product">
                <span class="favorite" onclick="addToFavorites(this)">♥</span>
                <img src="imaga/azul.png" alt="Camiseta  2024">
                <p>Precio: $36000</p>
                <p>Color: Azul</p>
                <p>Talla: Xl,S</p>
            </div>
            <div class="product">
                <span class="favorite" onclick="addToFavorites(this)">♥</span>
                <img src="imaga/morado.jpg" alt="Buso 2024">
                <p>Precio: $60000</p>
                <p>Color: morado</p>
                <p>Talla: Xl,S</p>
            </div>
            <div class="product">
                <span class="favorite" onclick="addToFavorites(this)">♥</span>
                <img src="imaga/negro.webp" alt="Camiseta Polo Negra">
                <p>Precio: $60000</p>
                <p>Color: Negro</p>
                <p>Talla: S</p>
            </div>
            <div class="product">
                <span class="favorite" onclick="addToFavorites(this)">♥</span>
                <img src="imaga/cafe.avif" alt="Zapatos">
                <p>Precio: $120000</p>
                <p>Color: Cafe</p>
                <p>Talla: 37</p>
            </div>
        </div>
    </main>
    <script src="scripts.js"></script>
</body>
</html>

