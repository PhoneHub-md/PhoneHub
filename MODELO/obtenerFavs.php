<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['favoritos']) && !empty($_SESSION['favoritos'])) {
    echo "<ul>";
    foreach ($_SESSION['favoritos'] as $productoId => $producto) {
        echo "<li>";
        echo "Titulo: " . $producto['titulo'] . ", Precio: " . $producto['precio'];
        echo "<form>";
        echo "<input type='hidden' name='idProducto' value='" . $productoId . "'>";
        echo "<img src='" . $producto['imagen'] . "'></img>";
        echo "<button type='button' class='eliminarDeFavoritos'>Borrar</button>";
        echo "</form>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "No hay productos favoritos.";
}
?>
