<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_SESSION['admin'])) {
    if (isset($_POST['idProducto'])) {
        $productoId = $_POST['idProducto'];
        
        if (isset($_SESSION['favoritos'][$productoId])) {
            unset($_SESSION['favoritos'][$productoId]);
            echo json_encode(['status' => 'success', 'message' => 'Producto eliminado de favoritos']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'El producto no existe en favoritos']);
        }
        exit();
    }
}

echo json_encode(['status' => 'error', 'message' => 'Solicitud no válida']);
?>
