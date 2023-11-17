<?php
require_once "MODELO/Conexion.php";
require_once "CONTROL/ProductoController.php";
require_once "CONTROL/LoginController.php";
session_start();

$controladorProducto = new ProductoController();

$controladorProducto->manejarNavbar();

include "VISTA/home.php";
?>
