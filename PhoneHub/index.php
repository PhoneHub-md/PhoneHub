<?php

require_once "MODELO/Conexion.php";
require_once "CONTROL/ProductoController.php";
$controlador = new ProductoController();
$controlador->buscarDatos();
?>