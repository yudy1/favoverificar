document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.eliminar-equis').forEach(button => {
        button.addEventListener('click', () => {
            const productId = button.getAttribute('data-id');
            eliminarProductoDeLista(productId);
        });
    });
});

function comprarProducto(id) {
    alert('Producto ' + id + ' comprado!');
}

function agregarAlCarrito(id) {
    alert('Producto ' + id + ' agregado al carrito!');
}

function notificarProducto(id) {
    alert('Notificación para el producto ' + id + ' activada!');
}

function eliminarProducto(id) {
    if (confirm('¿Estás seguro de que deseas eliminar el producto ' + id + '?')) {
        document.getElementById('producto-' + id).remove();
    }
}

function eliminarProductoDeLista(id) {
    document.getElementById('producto-' + id).remove();
}
