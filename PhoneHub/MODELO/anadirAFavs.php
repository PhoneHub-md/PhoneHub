<?php
session_start();
header('Content-Type: application/json');

$response = array('status' => 'error', 'message' => 'Error desconocido');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_SESSION['admin'])) {
    if (isset($_POST['idProducto']) && isset($_POST['titulo']) && isset($_POST['precio']) && isset($_POST['imagen'])) {
        $productoId = $_POST['idProducto'];
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $imagen = $_POST['imagen'];

        if (agregarAFavs($productoId, $titulo, $precio, $imagen)) {
            $response['status'] = 'success';
            $response['message'] = 'Producto agregado a favoritos';
        } else {
            $response['message'] = 'Error al agregar el producto a favoritos';
        }
    }
}

echo json_encode($response);

function agregarAFavs($productoId, $titulo, $precio, $imagen) {
    if (!isset($_SESSION['favoritos'])) {
        $_SESSION['favoritos'] = array();
    }

    if (isset($_SESSION['favoritos'][$productoId])) {
        $_SESSION['favoritos'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio,
            'imagen' => $imagen
        );
    } else {
        $_SESSION['favoritos'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio,
            'imagen' => $imagen
        );
    }

    return true;
}
?>
