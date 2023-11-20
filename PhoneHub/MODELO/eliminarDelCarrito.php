<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idProducto'])) {
        $productoId = $_POST['idProducto'];
        
        if (isset($_SESSION['carrito'][$productoId])) {
            unset($_SESSION['carrito'][$productoId]);
            header('Location: ../index.php');
            exit();
        }
    }
}

?>
