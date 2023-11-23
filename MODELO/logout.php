<?php
session_start();

require_once('Conexion.php');

if (isset($_SESSION['carrito']) || isset($_SESSION['favoritos']) && !isset($_SESSION['admin'])) {
    $cartData = isset($_SESSION['carrito']) ? serialize($_SESSION['carrito']) : null;
    $favsData = isset($_SESSION['favoritos']) ? serialize($_SESSION['favoritos']) : null;

    $idUsuario = $_SESSION['idUser'];

    $conexion = Conexion::conexion();
    $consulta = "UPDATE usuario SET cartData = ?, favsData = ? WHERE idUsuario = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("ssi", $cartData, $favsData, $idUsuario);
    $stmt->execute();

    $stmt->close();
}
session_destroy();

header('Location: ../index.php?home');
?>
