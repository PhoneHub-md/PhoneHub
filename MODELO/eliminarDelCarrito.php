<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_SESSION['admin'])) {
    if (isset($_POST['idProducto'])) {
        $productoId = $_POST['idProducto'];
        
        if (isset($_SESSION['carrito'][$productoId])) {
            unset($_SESSION['carrito'][$productoId]);
            echo json_encode(['status' => 'success', 'message' => 'Producto eliminado del carrito']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'El producto no existe en el carrito']);
        }
        exit();
    }
}

echo json_encode(['status' => 'error', 'message' => 'Solicitud no válida']);
?>
