<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    echo "<ul>";
    foreach ($_SESSION['carrito'] as $productoId => $producto) {
        echo "<li>";
        echo "Titulo: " . $producto['titulo'] . ", Precio: " . $producto['precio'];
        echo "<form>";
        echo "<input type='hidden' name='idProducto' value='" . $productoId . "'>";
        echo "<button type='button' class='eliminarDelCarrito'>Borrar</button>";
        echo "</form>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "El carrito está vacío.";
}
?>
