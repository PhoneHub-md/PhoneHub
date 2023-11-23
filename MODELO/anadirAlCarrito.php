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

        if (agregarAlCarrito($productoId, $titulo, $precio, $imagen)) {
            $response['status'] = 'success';
            $response['message'] = 'Producto agregado al carrito';
        } else {
            $response['message'] = 'Error al agregar el producto al carrito';
        }
    }
}

echo json_encode($response);

function agregarAlCarrito($productoId, $titulo, $precio, $imagen) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    if (isset($_SESSION['carrito'][$productoId])) {
        $_SESSION['carrito'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio,
            'imagen' => $imagen
        );
    } else {
        $_SESSION['carrito'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio,
            'imagen' => $imagen
        );
    }

    return true; // Devuelve true si la operación fue exitosa
}
?>
