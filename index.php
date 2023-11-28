<?php
session_start();
require_once "MODELO/Conexion.php";
require_once "CONTROL/NavbarController.php";
require_once "CONTROL/Controlador.php";

$controladorNavbar = new NavbarController();

$controladorNavbar->manejarNavbar();
if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once "CONTROL/Controlador.php";
}
include "VISTA/home.php";
?>