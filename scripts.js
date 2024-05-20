function addToFavorites(element) {
    if (!isLoggedIn()) {
        alert("Debes iniciar sesión para agregar productos a favoritos.");
        return;
    }
    alert("Producto agregado a favoritos");
}

function showLoginForm() {
    document.getElementById('login-form').style.display = 'block';
}

function login(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    // Aquí puedes implementar la lógica de autenticación
    // Para este ejemplo, aceptaremos cualquier nombre de usuario y contraseña
    alert("Inicio de sesión exitoso");
    document.getElementById('login-btn').style.display = 'none';
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('manage-favorites-btn').style.display = 'block';
}

function isLoggedIn() {
    // Aquí puedes implementar la lógica para verificar si el usuario está conectado
    // Por simplicidad, estamos usando una lógica de usuario estático
    return document.getElementById('login-btn').style.display === 'none';
}

