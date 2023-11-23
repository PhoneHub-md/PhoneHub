<?php

require_once('Conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idProducto'])) {
        $idProducto = $_POST['idProducto'];
        $conexion = Conexion::conexion();

        $consulta = "DELETE FROM producto WHERE idProducto = ?";
        $stmt = $conexion->prepare($consulta);
        $stmt->bind_param('i', $idProducto);
        $stmt->execute();

        header('Location: index.php');
        exit();
    }
}
?>
