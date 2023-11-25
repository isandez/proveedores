document.getElementById('menu-btn').addEventListener('click', function() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
});

// Base de datos simulada de productos y precios
const baseDeDatos = {
    "1" : { nombre: "leche", precio: 10000 },// Código de barras: Precio
    "2": { nombre: "huevos", precio: 20000 },
    // Agrega más productos aquí...
};

const codigoBarrasInput = document.getElementById("codigo_barras");
const nombreProductoElement = document.getElementById("nombre_producto");
const precioProductoElement = document.getElementById("precio_producto");

codigoBarrasInput.addEventListener("input", () => {
    const codigoBarras = codigoBarrasInput.value;
    if (baseDeDatos[codigoBarras]) {
        const producto = baseDeDatos[codigoBarras];
        nombreProductoElement.textContent = producto.nombre;
        precioProductoElement.textContent = `$${producto.precio.toFixed(2)}`;
    } else {
        nombreProductoElement.textContent = "Producto no encontrado";
        precioProductoElement.textContent = "-";
    }
    codigoBarrasInput.value = ""; // Limpia el campo de entrada para el siguiente escaneo
});
