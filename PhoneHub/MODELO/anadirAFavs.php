<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idProducto']) && isset($_POST['titulo']) && isset($_POST['precio'])) {
        $productoId = $_POST['idProducto'];
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        agregarAFavs($productoId, $titulo, $precio);
    }
}

 function agregarAFavs($productoId, $titulo, $precio) {
    if (!isset($_SESSION['favoritos'])) {
        $_SESSION['favoritos'] = array();
    }

    if (isset($_SESSION['favoritos'][$productoId])) {
        $_SESSION['favoritos'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio
        );
    } else {
        $_SESSION['favoritos'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio
        );
    }
    header('Location: ../index.php?tienda');
    exit();
}

?>
