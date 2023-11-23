<?php
require_once "MODELO/Conexion.php";
require_once "CONTROL/NavbarController.php";
require_once "CONTROL/LoginController.php";
session_start();

$controladorNavbar = new NavbarController();

$controladorNavbar->manejarNavbar();

include "VISTA/home.php";
?>