<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idProducto']) && isset($_POST['titulo']) && isset($_POST['precio'])) {
        $productoId = $_POST['idProducto'];
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        agregarAlCarrito($productoId, $titulo, $precio);
    }
}

 function agregarAlCarrito($productoId, $titulo, $precio) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    if (isset($_SESSION['carrito'][$productoId])) {
        $_SESSION['carrito'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio
        );
    } else {
        $_SESSION['carrito'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio
        );
    }
    header('Location: ../index.php?tienda');
    exit();
}

?>
