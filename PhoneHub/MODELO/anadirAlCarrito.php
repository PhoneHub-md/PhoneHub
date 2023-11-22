<?php
session_start();
header('Content-Type: application/json');

$response = array('status' => 'error', 'message' => 'Error desconocido');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_SESSION['admin'])) {
    if (isset($_POST['idProducto']) && isset($_POST['titulo']) && isset($_POST['precio'])) {
        $productoId = $_POST['idProducto'];
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];

        if (agregarAlCarrito($productoId, $titulo, $precio)) {
            $response['status'] = 'success';
            $response['message'] = 'Producto agregado al carrito';
        } else {
            $response['message'] = 'Error al agregar el producto al carrito';
        }
    }
}

echo json_encode($response);

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

    return true; // Devuelve true si la operación fue exitosa
}
?>
