<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idProducto'])) {
        $productoId = $_POST['idProducto'];
        
        if (isset($_SESSION['favoritos'][$productoId])) {
            unset($_SESSION['favoritos'][$productoId]);
            header('Location: ../index.php');
            exit();
        }
    }
}

?>
