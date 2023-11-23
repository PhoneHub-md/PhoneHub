<?php

class NavbarController {


    public function manejarNavbar() {
        if (isset($_GET['home'])) {
            include "VISTA/home.php";
            exit();
        } elseif (isset($_GET['nosotros'])) {
            include "VISTA/nosotros.php";
            exit();
        } elseif (isset($_GET['tienda'])) {
            include "VISTA/tienda.php";
            exit();
        } elseif (isset($_GET['contacto'])) {
            include "VISTA/contacto.php";
            exit();
        } elseif (isset($_GET['login'])) {
            include "VISTA/login.php";
            exit();
        }
    }
}
?>